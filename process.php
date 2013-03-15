<?php
/*
 * - Load the form
 *
 * - On email field change
 *
 * - On submit, check if the email already has an entry in the spreadsheet
 * - If not, insert the entry
 * - If yes, update the entry
 */
$key = '0AtgcNLNEtHUDdDZPNW9BUUpFa3RrRzRmd0c1ZTNqV3c';
$url = 'https://docs.google.com/spreadsheet/ccc?key=' . $key . '&usp=sharing';
$url = "http://spreadsheets.google.com/feeds/list/" . $key . "/od6/public/values?alt=json";