Flowelto Shop
Flowelto Shop is a famous flower shop in Indonesia made by a famous computer science student from Canada. To expand its business, Flowelto Shop wants to create a website for their shop. In that website, people can find information about the Flowelto Shop’s products and order it. This website enables the customers to know what inside Flowelto Shop is.
As a web developer, you are asked to create a website using Laravel 7 for this online shop. There are three types of user’s role in this website: Manager (Admin), Customer, and Guest (non-logged-in user).
Each page shows greeting to user, and current date time. The descriptions for each page are:
1.	Login
This page allows user to log in to the website. Display an error message on the login page if user enters wrong combination of Email and Password.
If user has entered correct Username and Password, the page will be redirected to the Home Page for customer or Manager based on the user’s role and there will be cookie for 7 days
2.	Register
This page allows guests to register themselves as Flowelto Shop customer. Display an error message if user input incorrect personal data. The following table shows the existing fields on this page and the validation for each field:
Username	Must be filled with minimum 5 characters
Email Address	Must be filled with email validation and unique
Password	Must be filled with minimum 8 characters length
Confirm Password	Must be filled and same with password
Address	Must be filled and minimum 10 characters length
Gender	Must be selected
Date of Birth	Must be filled 
3.	Home
This page allows user to see all Flowelto Shop categories. This page allows user to go to Flowelto Shop menu if user click the picture. This page is accessible for all users. In this page User can also pick the Flowelto Shop categories at Categories drop down menu in the navbar. 
In this page, guest can Login or Register. For all the logged-in user, you can Change Password at the Account drop down menu in the navbar.
For Manager, you can Add Flower and Manage Categories at the Account drop down menu in the navbar.
For Customers (logged-in user), they can access My Cart page and Transaction History page at the Account drop down menu in the navbar.
4.	View Product 
This page is accessible for all users. This page shows all Flowelto Shop’s menu based on its Categories. For Manager, this page can also be used to update or delete each flower. This page also includes pagination to display 8 items in per page and search field to search Flowelto Shop’s menu by ‘Name’ and ‘Price’. This page displays Flower’s image, name, and price. 
As for customer, each flower can be clicked to redirect into “Flower’s Detail Page”.
Each product in the lists have ‘Delete Flower’ and ‘Update Flower’ buttons:
-	If Manager click Delete Flower button, delete selected product
-	If Manager click Update Flower button, it will redirect them to Update Flower page
5.	Update Product
This page is only accessible for Manager. Manager can see all details of Flower’s they have choose and then they can update the flower by clicking “Update Flower” button on “View Flower” pages. When they click the button, it will redirect them to “Update Flower” page. 
In “Update Flower” page, it will show all the data of the flower and its description. The following table shows existing fields in the page and the validation for each field: 
Category	Must be selected 
Flower Name	Must be filled, unique, and minimum 5 characters length
Flower Price	Must be filled with integer format and must be more or equals 50000
Description	Must be filled and minimum 20 characters length
Flower Image	Can be Filled or not
6.	Flower Details Page
This page allows all users to see details of each flowers. There is also a “Add to Cart” button. Validate the button to only appear for Guest and Customer, then validate if Guest click “Add to Cart” button, they will redirect to Login Page. In this page, there will be a text field for inputting quantity of the flower you want to purchase. There will be an error message if user input a quantity below 1.
7.	Add Flower
This page will allow Manager to add new flower, this page can be accessed when Manager choose “Add Flower” Button at Account drop down menu in the navbar. 
The following table shows existing fields in the page and the validation for each field:
Category	Must be selected 
Flower Name	Must be filled, unique, and minimum 5 characters length
Flower Price	Must be filled with integer format and must be more or equals 50000
Description	Must be filled and minimum 20 characters length
Flower Image	Must be filled
If Manager click add button, it will redirect back to this page, but if there are errors, there will be an error message
8.	Manage Categories
This page is accessible only for Manager. This page shows all Flower Shop’s categories. First, insert the categories image and name to the database using seeder. This page must also display the categories image and categories name.
Each product in the lists have ‘Update Category’ and ‘Delete Category’ buttons:
-	If Manager click Delete Category button, delete all products with selected category
-	If Manager click Update Category button, will be redirect to Category Details Page
9.	Update Category
This page allows Manager to update existing Category. This page will be shown if Manager clicks Update Category button in Manage Categories page. Display an error message if Manager input incorrect Flower category data. 
The following table shows existing fields in the page and the validation for each field:
Category Name	Must be filled, unique, and minimum 5 characters length
Category Image	Can be filled or not
If Manager click Update button, then update current selected Flower with updated data. After that, redirect back to this page.
10.	My Cart
This page is accessible for customers to show customer’s cart. In this page, users can see all their items in the cart. There will be 2 Buttons: Update Button and Check Out Button. When users click Update Buttons, it will be used to update its item quantity (quantity must not below 0), if the customer update quantity to 0, then it will delete the selected items from the cart, and if the checkout buttons get clicked it will delete all items and those items will be inserted to Transaction History.
The item information that will displayed are flower image, flower name, subtotal (price x quantity) and quantity.
11.	Transaction History
This page is accessible for customers to show transaction history. The Transaction History display will be sorted by the newest Transaction. If the customer clicks a transaction history, it will redirect to selected Transaction History Detail Page.
12.	Transaction History Detail
This page will show the transaction history detail from the selected transaction history at Transaction History Page. The information that must be displayed are flower image, flower name, subtotal (price x quantity) and quantity. At the bottom of transaction history detail, there will be Total Price of the transaction history.
13.	Change Password
All Customer and Manager can Change their password in this page. The following table shows the existing fields on this page and the validation for each field:
Your Password	Must be same with the current password
New Password	Must be filled with minimum 8 characters length
Confirm Password	Must be filled and same with password
