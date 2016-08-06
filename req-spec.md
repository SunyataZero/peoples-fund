
# Introduction

## Target groups for this document

Both tech and non-tech people. **This document can be seen as the "interface" between these two groups**, it is therefore important that both groups understand it and that the language used is not too technical

## Context

The People's Fund has various ways to communicate outward:
* Presence on the web:
  * Facebook
  * Twitter
  * Other social media
  * **The website** - this is where this document comes in
* Other ways to communicate

## Scope

## References
[http://thepeoples.fund/](http://thepeoples.fund/)

## Objectives

Building a website for the People's Fund for Global Health and Development

# Target groups

## Young professionals and students in High-income countries
> 18-40 year old's primarily, i.e. Young/mid-career professionals and students. Our intended primary source of funding, a bit of a people's movement appeal, a dash of grassroots, so a modern look, large images, not very dissimilar to what amnesty and the Global Fund to Fight TB, Aids and Malaria are doing. But still highly professional and clean, we're investing people's money on their behalf so we want to signal that we're capable of doing that in a responsible way.

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

# Functional requirements

## Static information pages
See "Appendix B: Website data structure"

## *Funding application ("Apply for funding")*
Aka: "Project application submission portal"

Will most probably be put on the website (rather than in a separate portal) so everything easily integrated into one plugin/module

## *Funding evalution system*

> Step 1: Alignment with local country priorities using data from http://data.myworld2015.org - only projects that align with the top 5 priorities within the country can be funded. Data will have to be corrected for gender and education level. 

> Step 2: A local survey (logistically very complicated - suggestions very welcome!!). Mobile phone based surveymonkey-survey? Paper?

> Step 3: The member rating portal: How to translate an equation of weighted variables (i.e. impact rating *08 + sustainability rating *0.7 + cost-effectiveness rating * 0.6 ... = Total rating) into code. This would be in a portal environment where you first read about the project and click rating values from 1-5 on a number of different parameters, with some help on the way, including any tricks that make it fun to rate, and some control mechanisms to ensure that the user has actually read the application, and then a final thank you/pad on your shoulder when you're done rating a project.

## Donations ("Support us")

> one-time donation button

> recurring membership payments

## Discussion forum
  * General member discussion forum
   * All members and volunteers have read and write access to this forum. Will be the largest forum, available to everyone with a login
  * Country-level volunteers forums
   * One for each country we have country ambassadors in, and then all the volunteers in that country can login to his/her individual country forum
    * All board members, all country ambassadors and all admin accounts have read and write access to all country-level forums
    * Within-country volunteers have read and write access to the forum within their country
 
### Storing donation records
In a safe database, from which we can get an anonymized overview of our member characteristics (gender, age, geography and so on)

## User registration

## Blog posts (news items)

### Website and social media synchronized
* Priority: high

> We will write news updates every once in a while. Posts to Website, facebook and twitter in synchrony is exactly what we want.

# Non-functional requirements

## Low to medium bandwith
* Priority: medium/high

## Mobile version
* Priority: medium/high

"Responsive" website theme

We would like to use the mobile version of the website as a low-bandwidth version

## *Languages other than English*
will be a likely step at a later stage.

## Secure payments and user data privacy

https may be needed from the web host

## Good data storage

TBD: Investigate what this means

# Graphical presentation

## Front page structure
Priority: Low (this structure is flexible)

* Menu: Holds links to all the static pages
* Carousel - see below
* Categories: Links to articles of different types

## Image carousel
* Priority: medium/low

Has large images which are links to important ("highlighted") stories

## Large images
- including lots of images along the text that keeps the reader stimulated and emphasises key topics in the text

* Priority: medium/high

## Modern look

## Simplicity
* No wall of text on first or secondary pages

## Full-width images
* Priority: medium/high

## Large quotes from text
To keep the reader's eyes peeled and create footholds while reading, and give easy quick impressions for people who just glance at the website

* Priority: low

***

# Appendix A: Websites we like

* http://www.uniteforsight.org/
* https://www.amnesty.org/en/
* http://www.theglobalfund.org/en/
* http://www.pih.org
* https://internationalmedicalcorps.org
* http://www.brac.net/

> FF: I think a common feature that I love about these websites, is the large, beautiful, colorful images everywhere, the large simple icons to click on, and the fact that you just scroll down and get little bits of important information, no wall of text, and a lot becomes available just by scrolling down, you don't have to do many clicks and navigate much to reach core information on the organisation, as exemplified here for instance: https://www.amnesty.org/en/who-we-are/

# Appendix B: Website data structure

* Who we are
  * Management
    * Board
    * Audit Committee
    * Country Ambassadors
  * Communications
  * Human Resources
* What we do
  * Mission, Vision and Values
  * Fundraising
  * Causes
   * Microfinancing
   * Health and Development Projects
     * Child Health
     * Communicable Diseases
     * Education
     * Energy and Environment
     * Food Production and Nutrition
     * Health Systems
     * Peace, Justice and Human Rights
     * Lesbian, Gay, Bisexual and Transgender
     * Maternal Health
     * Mental Health
     * Non-Communicable Diseases
     * Policy and Governance
     * Poverty
     * Refugees
     * Water, Sanitation and Hygiene (WaSH)
     * Women’s Empowerment
  * Application Rating System
  * Project Evaluation Portal
* Where we work
* Apply for funding
  * Requirements
  * Application processing
  * Online Application Portal
    * Applicant Registration
    * Contact information
    * Basic Project Information
    * Budget
    * Project Information
  * Attachments
* Support us
  * Become a member
  * Donate
  * Take action

# Appendix C: Considerations when choosing a theme

* Responsive
* Customizable color
* Compatible with extensions



