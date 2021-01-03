#! /bin/bash
# Script runs tests

COMMAND=$1

function help() {
    echo "all - runs all tests"
    echo "ci - runs tests for continuous integration"
    echo "cypress - runs Cypress"
    echo "phpstan - runs PHPStan"
    echo "tester - runs Nette Tester tests"
}

# Runs Cypress
function cypress() {
    echo -e "Cypress"
    ./node_modules/cypress/bin/cypress open
}

# Runs PHPStan
function phpstan() {
    echo -e "PHPStan"
    ./vendor/bin/phpstan analyse src -c tests/phpstan.neon
}

# Runs Nette Tester tests
function tester() {
    # Default shell script for running tests from `tests` folder
    echo -e "Nette Tester"

    # PHP version of script for running tests
    php "./vendor/nette/tester/src/tester.php" -C tests
}

function all() {
    phpstan
    tester
}

function ci() {
	local results=0
    phpstan || results=$((results+$?))
    tester || results=$((results+$?))
    return ${results}
}

if [[ "${COMMAND}" == "" ]]; then
    help
fi

# run command
$COMMAND
