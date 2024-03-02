# Laravel Blog API

This project provides APIs for creating, retrieving, updating, and deleting blogs. Each blog has a title, description, and category. Each blog belongs to one category only.

**Environment Setup**

First step involve setting of the environment
Install XAMPP, VSCode, Postman, Laravel, and Composer.

**Database Configuration** 

*   Create a new database using XAMPP and note down its name.
*   Update the .env file in the project with your database details.

**Migration**

Create the necessary tables and their relationship in migratioon file and run the migration command to migrate to the db.
        
        php artisan migrate 

Example: [link to migrations](https://github.com/shristi209/Laravel_Blog_Project/tree/main/database/migrations)


**Seeder** 

Populate the categories table with predefined categories as we are taking only the id of the category, I manually insert the categories.

Example: [link to seeders](https://github.com/shristi209/Laravel_Blog_Project/tree/main/database/seeders)

**Model**

Model connects the database and laravel. So, define fillable fields and relationships between the two tables.

Example: [link to Models](https://github.com/shristi209/Laravel_Blog_Project/tree/main/app/Models)

**Controllers**

Add all the logic for CRUD operations such as insertion, retrieval, deletion, and updating in controllers.

Example: [link to controllers](https://github.com/shristi209/Laravel_Blog_Project/tree/main/app/Http/Controllers)

**Route**

Define API paths in the api.php file to direct to the appropriate controller functions.

Example on api.php: [link to route](https://github.com/shristi209/Laravel_Blog_Project/tree/main/routes)

After all these steps, to test the entire project we use postman. Use HTTP methods:
POST for inserting
GET for retrieving
PUT for updating
DELETE for deleting blogs

**Conclusion**

This project provides an example of creating APIs for a blog system using Laravel. By following the steps outlined above, we can set up and test the project locally.