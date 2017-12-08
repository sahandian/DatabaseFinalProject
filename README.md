# DatabaseFinalProject
This is our final project for CS3380 

## PROJECT MEMBERS INCLUDE:
Sahand Sadri
Kevin Hunkins
Daniel Weiss
Hayden Harrill
Daniel Clubb
Zachary Pierucci
Mitchell Hoffmann
Quinn Rydland

## Description
Our application is a website stating stats for the Chicago Blackhawks and the St. Louis Blues. With our application we have the Chicago Blackhawks and St. Louis Blues stats along with all of their players, and their stats through the 2017-2018 Season. We pull our data from two tables, one table is the teams table, which holds the team stats and is joined to the players table, that holds all of the players and their stats. You can also add, delete, and update players info if it is incorrect. 

## Schema
Players(Name,Team, GP, G, A, P, +/-, PIM, PPG, PPP, SHG, SHP, GWG, OTG, Shots)
Teams(Team, City, TeamCode, GamesPlayed, Points, Wins, Losess, OvertimeLosses, Division, Conferences, StanleyCups)

## ERD

![erd of database](https://github.com/sahandian/DatabaseFinalProject/blob/master/Screen%20Shot%202017-12-08%20at%201.03.36%20AM.png?raw=true"ERD")

## Crud
Crud is utilized throughout the application. We hosted our database on infinityfree. Create is utilized using INSERT INTIO. Read is utlized when the page is loaded/refreshed and uses the SELECT Statement. Data is updated at the bottom of the page using UPDATE. Data is deleted using the DELETE sql statement. 

## Video

<a href="http://www.youtube.com/watch?feature=player_embedded&v=YOUTUBE_VIDEO_ID_HERE
" target="_blank"><img src="http://img.youtube.com/vi/YOUTUBE_VIDEO_ID_HERE/0.jpg" 
alt="IMAGE ALT TEXT HERE" width="240" height="180" border="10" /></a>
