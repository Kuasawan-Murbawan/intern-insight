# Intern Insights
<b>Contents<b/>
1. Introduction
2. [Features & Functionalities[]([#Features & Functionalities](https://github.com/Kuasawan-Murbawan/intern-insight/blob/master/README.md#demonstration))](https://github.com/Kuasawan-Murbawan/intern-insight#features--functionalities)
3. [MVC]
	a. [Model](###Model)
	b. [Controller](###Controller)
	c. [View](###View)
4. [Demonstration](https://github.com/Kuasawan-Murbawan/intern-insight/blob/master/README.md#demonstration)
5. [Summary](https://github.com/Kuasawan-Murbawan/intern-insight/blob/master/README.md#summary)

## Introduction
An internship is a pre-career experience in which most students are bound to involve themselves sooner or later in their tertiary education. Some may have their targeted organisations or companies which they aimed after some time however some are still clueless not just on which company to apply but also how to apply and the processes that come along with it. Therefore, we believe it is important to provide **a platform that provides students with insight into internship journeys based on those who have already experienced it**. We hope this effort shall benefit those in favor of commencing their internships by broadening their knowledge to acknowledge the available opportunities and may ease their journey

## Features & Functionalities
1.  **User Registration**: Allow users to create an account on your website using their email address or social media accounts. This will enable them to submit reviews and ratings.
    
2.  **Internship Search**: Provide a search bar that allows users to search for internships by company name, location, industry, or job title.
    
3.  **Internship Listings**: Display a list of internships that are available for review. Include information such as company name, job title, location, duration, and compensation.
    
4.  **Internship Reviews**: Allow users to write detailed reviews of their internships, including pros and cons, tips for future interns, and overall impressions.
    
5.  **Review Submission**: Allow users to submit reviews of their internships. Include fields such as company name, job title, location, duration, compensation, work environment, job responsibilities, and overall rating.
    
6.  **Internship Ratings**: Allow users to rate the internships based on different criteria such as work-life balance, compensation, job responsibilities, and company culture.
    
7.  **Review Display**: Display the submitted reviews on the website, along with the user’s name and profile picture. Allow users to sort the reviews by date, rating, or relevance.
    

8. **Review Moderation**: Review the submitted reviews to ensure that they are appropriate and do not contain any offensive or inappropriate content.

## MVC Concept

### Model
Our project consists of 2 user-defined models which is the Reviews & Companies model.
![database_intern_insigts drawio](https://github.com/Kuasawan-Murbawan/intern-insight/assets/74280845/77473ef3-c571-4a80-abb3-0751e111097b)


**Relationships**
-   1 company can have many reviews
    
-   1 review can correspond to 1 company
    
-   1 user can make 1 review
    
-   1 review corresponds to 1 user

### Controllers
We also have 2 controller which corresponds to each model

**Companies Controller**

| Function Name      | Parameters |       Return      | Function                                  |
|--------------------|:----------:|:-----------------:|-------------------------|
| home               |      -     | all companies     | redirect to home                          |
| showCompaniesUser  |      -     | all companies     | show companies for user’s interface       |
| showDetails        | $companyID | 1 company details | show company details                      |
| showCompaniesAdmin |      -     | all companies     | show companies for admin’s interface      |
| showForm           |      -     |         -         | show form to insert companies             |
| insertCompanies    |      -     | 1 company details | insert companies using admin-input values |
| showUpdateForm     | $companyID | 1 company details | show form to update company               |
| updateCompany      | $companyID | all companies     | update companies using admin-input values |
| delete             | $companyID | all companies     | delete company         |

**Reviews Controller**
| Function Name | Parameters |  Return  |    Function     |
|:-------------:|:----------:|:---------------------:|:-------------:|
| store         |      -     | Review details	| Stores a new review submitted by a user                   |
| showReview    | $companyID | Reviews for the specified company | Displays reviews for a particular company                 |
| showUserForm  | $companyID | User review form	 | Shows the form for users to submit a review for a company |
| delete        | $companyID | Redirect to company reviews       | Deletes a specific review                                 |
| init          |      -     |none | Initializes the database with sample review data          |

## Demonstration

https://youtu.be/fwyKlRZXuC0

## Summary
This project aims to bridge the gap between internship seekers and organizations offering internships. By providing a comprehensive platform for sharing experiences and accessing information, it aims to empower students, adults, and organizations alike. Despite anticipated constraints in budget, time, user engagement, and data security, the project will progress through key stages of planning, development, testing, deployment, and continuous enhancement, ensuring a valuable resource for all stakeholders involved in the internship ecosystem.
