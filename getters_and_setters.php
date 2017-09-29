<?php

/**
 * I've never been able to forget a request our development team once received from the marketing team: could we give them a provider-wise summary of all the emails in our database? For instance, how many account were on Gmail, how many on Hotmail, etc.

 The answer was a quick 'no', because there were millions of records, and using a 'like' SQL query would have destroyed everything. We would have added another column and extracted the domain from all emails, but that's just data repetition in the long run.

 Since then, I've had an uneasy feeling while storing email addresses in the database directly. In all later projects, I stored the username and host name separately, but how to mask this distinction from the front end? No front-end developer would be happy joining and splitting emails on '@' over and over.

 Enter getters and setters!

 */

 