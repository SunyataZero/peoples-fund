Approved by _________ on ________

# Introduction

These are the requirements for the version of the website for the autumn 2016. Future requirements - for when the application process opens (probably during 2017) - are stored in a separate document

Please note that these requirements may change in the future. This may result in data loss and other consequences in the future if we (for example) change technical systems. For more information about risks, please see a separate document


## References
[http://peoplesfundglobal.org/](http://peoplesfundglobal.org/)


# Target groups

## Young professionals and students in High-income countries
> 18-40 year old's primarily, 
i.e. Young/mid-career professionals and students. Our intended primary source of funding, a bit of a people's movement appeal, a dash of grassroots, so a modern look, large images, not very dissimilar to what amnesty and the Global Fund to Fight TB, Aids and Malaria are doing. But still highly professional and clean, we're investing people's money on their behalf so we want to signal that we're capable of doing that in a responsible way.

* Priority: High
* Target roles: Contributing, volunteering, rating and voting
* Considerations: Modern look

## 18-40 year old low- and middle income country (LMIC) inhabitants

Our primary rating and voting group: We aim for this to be our major membership base. Most LMIC residents do not pay membership fees, but we really need them for rating projects, voting for the board, and submitting applications for funding. 

* Priority: High
* Target roles: volunteering, rating, voting, applying for funding
* Considerations: Mobile platforms, low bandwidth, other languages

## People aged 65+
> Secondarily: 65+: retired people that may have time, perhaps money, and want to do good, but the above 2 groups will be our primary target groups.

* Priority: Low
* Target roles: Contributing, volunteering rating and voting
* Considerations: Simplicity

## Country ambassadors
* Priority: Low

## ??? TBD: People Applying for funding ???
* Priority: Medium
* Target roles:
* Considerations:

## Administrators of the website
* Priority: Low
* Target roles: Extracting information about donations and memberships, Maintaining the information on the website
* Considerations: 

# Scenarios

TBD

For example:
* User A has heard of the organization through a friend and visits the website interested in learning more and potentially becoming a member


# Functional requirements

## User website profiles
* Priority: High
* Description: People can create a profile on the website and log in

### User information stored

Name | Priority | Notes
---|---|---
Email | Essential |
Password | Essential |
Membership | - | See below
Country | Low |
Gender | Low |
Age | Low |
TBD: More? |

### Website and organization membership
* Priority: High
* Description: A user who has a login can become a member. The membership status will be stored in a database. *This will be the important interface to the future functionality* when we want users to vote, and when we want people to search for funds

The categories that we want for logged-in users:

User group | Notes
---|---
Admins |
Members |
Non-members |

* *Applicants for funds* can be members or non-members
* *Ambassadors* can be members or non-members, or can even be without a log in

## Recurring payments
* Priority: High
* Description: The user can register recurring payments through the website
* Limitation: This does not cover ending the recurring payment
* Risk at system change: 

### Active recurring payments visible for admins
* Priority: Medium
* Description: Admins can see if a user is currently a member
* Limitation: Please note that this does not cover a nice presentation, for example the admin may not be able to get a list of all current members. If we want this functionality it's best to put into a separate requirement. This requirement - as with other reqs - only covers the most basic functionality, in this case the possibility to see if a user is making recurring payments

### Active recurring payments visible for user
* Priority:

### Connecting recurring payments to membership
* Priority: High

### Different recurring payment amounts depending on country
* ***Question: How many groups of countries do we want?***
* ***Question: Do we still want memberships without payments?***

### Yearly payments
* Priority: Medium
* Description: Payments are done each year instead of each month to decrease overhead

### Storing history of recurring payments for each user
* Priority:

### History of one-time donations visible for admins
* Priority:

### History of one-time donations visible for user
* Priority:

### Stripe integration for recurring payments
* Priority: High
* Description: 

## Making one-time donations
* Priority:

### Connecting one-time donations to membership
* Priority:

### Storing history of one-time donations for each user
* Priority: Low/medium
* Description: 

### History of one-time donations visible for admins
* Priority:

### History of one-time donations visible for user
* Priority:

### Stripe integration for one-time donations
* Priority: High
* Description:


# Non-functional requirements

Security, etc


