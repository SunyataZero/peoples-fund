

# References

## CiviCRM User Manual

https://docs.civicrm.org/user/en/stable/membership/online-membership-sign-up/#testing-membership-sign-up-pages

Excerpts:

> Try and put yourself in the eyes of someone who wants to become a member of your organisation and go through the process a number of times, with different combinations of fields each time. Make sure that the data all appears as you would expect in CiviCRM. Once you've tested the process and have made any necessary changes, get other members of staff or friends from outside your organisation to test the process.

> [...]

> It is worthwhile periodically testing and reviewing your membership process to make sure that it is as smooth as possible. You will receive indirect feedback from your members as they use the form. If they are not entering data in the way you intended then you will need to make some changes. From time to time, you may want to solicit direct feedback from people who have recently become members to see how easy it was for them to become a member and ask their opinions on ways in which you could improve your form.


# Prerequisites

* an email address
* a paypal account
* a people's fund account (drupal)


* 


# Procedure

*Please note that this test is run in "test mode" which limits it's usefulness* (see KarinG's answer [here](https://civicrm.stackexchange.com/questions/17504/error-message-when-testing-memberships-expected-one-paymentprocessor-but-found))

Monthly

0. Log out of the peoples fund website (If you are logged in)

1. Log out of your paypal account

1. Go to https://peoplesfundglobal.org/civicrm/contribute/transact?reset=1&id=10&action=preview

2. Select Monthly

3. Select 7 euro

3. Enter all the other required information and click on Finish/Complete

4. Verify that you are now on a paypal page which probably starts with www.sandbox.paypal.com/____ 

{Three cases: Login, Create profile, Pay directly with credit card}

5. Log in to your paypal account using the screen before you

6. Verify that you see a page which summarizes your recurring payment
  * you should see that it says that the payment is recurring every month
  * and the amount should be 7 euro

7. Click "Accept"

8. On the next screen click on "Go back to the test store" (or similar). This button is located in the lower right corner on desktop computer screens

9. Verify that you are now back on peoplesfundgloba.org/____ and that the page is a summary of the recurring payment (membership payment)
  * The monthly amount should be 7 euro

10. Go to your email client for the email address you entered at the start

11. Verify that you have gotten a thank you message similar to this one - {***NOK for Tord at the time of writing***}

> Thank you so much for your support to The People's Fund!
> 
> You have joined our movement, congratulations! We are a fund of the people, by the people, for the people, and without your support we couldn't exist. Now let's make positive change happen for those that need it the most.

12. Log in to your peoplesfundglobal.org account: https://peoplesfundglobal.org/user

13. Using the menu: "Memberships" -> "Find Memberships"

14. Important: Choose "Yes" for "Membership is a test"

15. Click "Search" - {***NOK for Tord at the time of writing***}

16. 


Later on you should get another email message similar to this one:

> Recurring Contribution Notification
> 
> Dear Tord Dellsén,
> 
> Thanks for your auto renew membership sign-up.
> 
> This membership will be automatically renewed every 1 month(s).
> 
> This membership will be renewed automatically. You can cancel the auto-renewal option by visiting this web page.

***OK for Tord, but it takes a long time (got the email after 12 hours or so, maybe these emails are sent out only once per day?)***


**TODO: testing ending a donation**
