# features/web.feature
Feature: web
  In order to display the sum of two numbers
  As anybody
  I need to provide two numbers

  @billing @bicker @annoy
  Scenario Outline: Display the sum of two provided numbers
    Given I have the number <n1> and the number <n2>
    When I add them together
    Then I should get <res>

    Examples:
      | n1  | n2  | res  |
      | 2   | 5    | 7    |
      | 4   | 4    | 8    |
      | 5   | 2    | 7    |
      | 2   | 5    | 7    |
      | 4   | 4    | 8    |
      | 5   | 2    | 7    |
      | 2   | 5    | 7    |
      | 4   | 4    | 8    |
      | 5   | 2    | 7    |
      | 2   | 5    | 7    |
      | 4   | 4    | 8    |
      | 5   | 2    | 7    |
      | 2   | 5    | 7    |
      | 4   | 4    | 8    |
      | 5   | 2    | 7    |
      | 2   | 5    | 7    |
      | 4   | 4    | 8    |
      | 5   | 2    | 7    |
      | 1   | 2    | 3    |
      | 5   | 3    | 8    |

  Scenario: Display the sum of two provided numbers
    Given I have the number 50 and the number 20
    And I have a third number of 20
    When I add them together
    Then I should get 90