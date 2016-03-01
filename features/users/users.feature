# features/users.feature
Feature: users
  In order to display the sum of two numbers
  As anybody
  I need to provide two numbers

  @aber
  Scenario: Display the sum of two provided numbers
    Given I have the number 50 and the number 25
    When I add them together
    Then I should get 75

  @billing
  Scenario: Display the sum of two provided numbers
    Given I have the number 50 and the number 20
    And I have a third number of 20
    When I add them together
    Then I should get 90