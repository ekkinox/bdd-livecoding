Feature: BankAccount
    In order to manage a bank account
    As a customer
    I need to be able to make deposits and withdraw money

    Background:
        Given I have a bank account with a balance of 100
        Then the bank account balance should be 100

    Scenario: I can make a deposit operation
        When I make a deposit of 20
        Then the bank account balance should be 120

    Scenario: I can make a withdraw operation
        When I make a withdraw of 20
        Then the bank account balance should be 80