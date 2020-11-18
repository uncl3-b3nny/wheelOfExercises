# Tradeful technical evaluation

### The parameters of this evaluation:
    1. Create a Laravel Project.
    1. Push appropriate files to github/bitbucket.
    1. Create a route that display/update and create data in a database table
    1. Use a model
    1. Use Blade Template engine
    1. Create the relevant table as a migration
    1. Display, update and create front end for the data in a non-horrible looking way.
    1. The turn around time expectation is 1 week.

## Project Documentation
 - Date received: 11/12/2020
 - Due Date: 11/19/2020
 - Project Description: I'm going to build "The Wheel of Fitness", a spinoff of an earlier idea of mine, "The Wheel of Justice" to - hopefully - demonstrate adequate technical understanding and skills required for this role. 
 - Stack Description: Laravel framework using PHP, mysql, and the Blade templating engine. Git for source control hosted on Github. 

## User Stories

    As a <parent>
    I want <a wheel of fitness>
    so that <I can play with my kids and get a little exercise>

    As an <applicant>
    I want <a test suite>
    So that <I can demonstrate adequate understanding of behavior driven development>

## Feature: Wheel of fitness

    Description: A directory of exercises, that can be randomly selected, along with randomized #s of sets & reps. Of course includes jackpots like hershey kisses, and land mines like burpies to failure

## Acceptance tests (per the evaluation parameters)

    It would be acceptible if 
        Given a user is on the 'wheel page'
        When they c/r/u/d an exercise
        Then the app c/r/u/ds the data in a database table, per the Exercise model & its migration file(s)
    It would be acceptible if 
        Given a user is on the 'wheel page'
        When they look at the page
        They can honestly say, "This doesn't look horrible".
    It would be acceptible if 
        Given a user is on the 'wheel page'
        When they click the spin the wheel button, (or if i get there, actually spin the wheel) 
        Then the app returns an exercise & a number of reps(or 'to failure') from its lists
