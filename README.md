# CRUD Project in Laravel

This project was developed to train and practice the concepts of **CRUD (Create, Read, Update, Delete)** using the Laravel framework. The focus of the project is on creating, reading, updating, and deleting user records in a simple web application.

## Key Features

- **User Listing**:  
  Displays all the users registered in the system.

- **User Registration**:  
  Allows new users to be registered through a creation form.

- **User View**:  
  Displays the details of a specific user when selected.

- **User Edit**:  
  Allows updating the information of an existing user.

- **User Deletion**:  
  Allows a user to be deleted from the system.

## System Routes

The system offers easy-to-access routes to perform CRUD operations on the **User** resource:

- `GET /users`: Displays all registered users.
- `GET /users/create`: Displays the form for creating a new user.
- `POST /users`: Processes the user creation form.
- `GET /users/{user}`: Displays the details of a specific user.
- `GET /users/{user}/edit`: Displays the form to edit a user.
- `PUT /users/{user}`: Processes the update of a user.
- `DELETE /users/{user}`: Deletes a user from the system.

The code has been simplified using the `Route::resource()` method, which automatically creates all the routes for the **UserController**.
