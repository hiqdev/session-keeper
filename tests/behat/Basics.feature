Feature: Basics
    Background:
        Given empty temporary session repository
          And repository has 0 activities

    Scenario: login
        Given browser fingerprint is FINGER1 and description is CHROME1
          And user ID is USER1 from IP 1.1.1.1
          And user has chosen secure login
         Then login is ok
          And repository has 1 activities

    Scenario: OK check with same data
        Given browser fingerprint is FINGER1 and description is CHROME1
          And user ID is USER1 from IP 1.1.1.1
         Then check is ok
          And repository has 1 activities

    Scenario: FAILED check from other IP
        Given browser fingerprint is FINGER1 and description is CHROME1
          And user ID is USER1 from IP 2.2.2.2
         Then check is failed
          And repository has 1 activities

    Scenario: login from other IP
        Given browser fingerprint is FINGER1 and description is CHROME1
          And user ID is USER1 from IP 2.2.2.2
          And user has chosen secure login
         Then login is ok
          And repository has 2 activities

