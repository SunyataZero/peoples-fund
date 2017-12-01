Approved by _________ on ________

# Introduction

These are the requirements for the version of the website for the autumn 2016. Future requirements - for when the application process opens (probably during 2017) - are stored in a separate document

Please note that these requirements may change in the future. This may result in data loss and other consequences in the future if we (for example) change technical systems. For more information about risks, please see a separate document

## Context

See the [GUI spec](gui-spec.md) for front-end related reqs

## References
[http://peoplesfundglobal.org/](http://peoplesfundglobal.org/)


# Target groups

## Young professionals and students in High-income countries (HICs)
> 18-40 year old's primarily, 
i.e. Young/mid-career professionals and students. Our intended primary source of funding, we need a people's movement/ grassroots  appeal, so a modern look, large images, not very dissimilar in appearance to the websites of Amnesty and the Global Fund to Fight TB, Aids and Malaria. But still highly professional and clean, we're investing people's money on their behalf so we want to signal that we're capable of doing so in a responsible way.

* Priority: High
* Target roles: Contributing, volunteering, rating and voting
* Considerations: Modern look

## 18-40 year old low- and middle income country (LMIC) inhabitants

The group of people that we represent: We aim for this to be our major membership base. Most LMIC residents do not pay membership fees, but we really need them for expressing their opinions, rating projects, voting for the board, and submitting applications for funding. 

* Priority: High
* Target roles: rating, voting, applying for funding
* Considerations: Mobile platforms, low bandwidth, other languages

## People aged 65+ in HICs
> Secondarily: 65+: retired people that may have time, perhaps money, and want to do good, but the above 2 groups will be our primary target groups.

* Priority: Low
* Target roles: Donors / passive paying members
* Considerations: Simplicity

## Country ambassadors
* Priority: Low

## People applying for funding
* Priority: Medium
* Target roles: Will read information on current grant openings and fill in forms for funding applications
* Considerations: Simplicity/user-friendliness in information and forms.

## Administrators of the website
* Priority: Low
* Target roles: Extracting information about donations and memberships, Maintaining the information on the website
* Considerations: 


# Scenarios

See [this link](https://drive.google.com/drive/folders/0ByVj57GOBN6yOHZtOEo4LW5UcFk)


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
Country | Essential |
Address | Essential |
Gender | Essential |
Birthday | Essential |
Profession | Medium |
Main areas of interest | Medium | list of topic areas that can be added to an empty list to the right of it by clicking a button: [>>]

### Website and organization membership
* Priority: High
* Description: A user who has a login is a member and vice versa. You become a member by signing up on the website. The membership status will be stored in a database. *This will be the important interface to the future functionality* when we want users to vote, and when we want people to apply for funds


* *Applicants for funds* can be members or non-members.
* *Ambassadors* are members only. They can not apply for funding.
* *Admins* are members only. They can not apply for funding.
* *active volunteers* are members only. They can not apply for funding.
* *passive members* are members only. They can apply for funding if they want to. IMPORTANT: If passive members apply for funding in a grant cycle, they are automatically omitted from being able to rate their own or competing projects in that cycle.

## Membership fees
* Priority: Essential
* * Risk at system change:

## Recurring contributions
* Priority: Essential
* Description: The user can register recurring contributions through the website
* Limitation: This does not cover ending the recurring payment
* Risk at system change: 

### Active recurring contributions visible for admins
* Priority: Medium
* Description: Admins can see if a user is currently a member
* Limitation: Please note that this does not cover a nice presentation, for example the admin may not be able to get a list of all current members. If we want this functionality it's best to put into a separate requirement. This requirement - as with other reqs - only covers the most basic functionality, in this case the possibility to see if a user is making recurring payments

### Active recurring contributions visible for user
* Priority: High
* Description: People need to be able to see what they will be charged next month/on an annual basis

### Connecting recurring contributions to membership
* Priority: High

### Verifying country of origin
* Description: To lower the risk of vote manipulation
* Priority: High

### Yearly payments
* Priority: Medium
* Description: Payments are done each year instead of each month to decrease money lost on transaction fees.

### Storing history of recurring payments for each user
* Priority: high
* Description: People need to be able to see what they have paid in the past.

### History of one-time donations visible for admins
* Priority: High
* Description: We need to keep a budget of one-time donations, and to see their fluctuations over time, to be able to correlate those to our fundraising/awareness activites etc.

### History of one-time donations visible for user
* Priority: High
* Decsription: People need to be able to see what they have paid in the past.

### Stripe integration for recurring payments
* Priority: Medium
* Description: We may give this option.

### Paypal integration for recurring payments
* Priority: High
* Description: We will use this as our fee payment system.

## Making one-time donations
* Priority: Essential
* Note: Needs to be possible to make anonymous donations.

### Connecting one-time donations to membership
* Priority: Medium
* Description: Note: it should be possible to just donate and not be a member, so should only be stored for our members, if they don't use the option of anonymous donation.

### Storing history of one-time donations for each user
* Priority: medium
* Description: only for non-anonymous donations, so we only register what people want us to register

### Stripe integration for one-time donations
* Priority: Medium
* Description: Maybe.

### Possible to make one-time donations for users who are not logged in
* Priority: High
* Description: 


# Non-functional requirements

## Security

If you have access you can view the security reqs:
https://docs.google.com/document/d/15bqmE4sUtFoCOZ_ZS85y-yU8SASEVYSFhcC-dPQPvpI/edit

## Annual spending limitation
We have about $50 per year to spend on plugins

TBD: What is the total sum we can spend on the website per year?

## Website compatible latest versions of major browsers

Both mobile and desktop

Desktop: Chrome, Firefox, Internet Explorer, Safari

Mobile: Chrome, Firefox, Safari


***


# Future requirements

## *Funding application ("Apply for funding")*
Aka: "Project application submission portal"

Will most probably be put on the website (rather than in a separate portal) so everything easily integrated into one plugin/module. Could also just be a simple PDF-application template with no online application portal.


## *Funding evaluation system*

> Step 1: Alignment with local country priorities using data from http://data.myworld2015.org - only projects that align with the top 5 priorities within the country can be funded. Data will have to be corrected for gender and education level. 

> Step 2: A local survey (logistically very complicated - suggestions very welcome!!). Mobile phone based surveymonkey-survey? Paper?

> Step 3: The member rating portal: How to translate an equation of weighted variables (i.e. impact rating *08 + sustainability rating *0.7 + cost-effectiveness rating * 0.6 ... = Total rating) into code. This would be in a portal environment where you first read about the project and click rating values from 1-5 on a number of different parameters.

## Blog posts (news items)

### Website and social media synchronized
* Priority: Low

> Not a priority anymore, we're not gonna do many blog posts and we can just post directly to FB

## *Languages other than English*
will be a likely step at a later stage.


## Secure payments and user data privacy

https may be needed from the web host


## Good data storage

TBD: Investigate what this means


## Paypal integration for one-time donations
 important
 
## Paypal integration for membership payments

accomplished

