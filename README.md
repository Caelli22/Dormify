# Dormify: A Residential Rental Solution

## Overview

Dormify is a web-based application designed to streamline the management of residential rental properties. It provides property owners and managers with tools to efficiently handle property listings, tenant information, and rental transactions.

## Table of Contents

- [Features](#features)
- [Getting Started](#getting-started)
- [Technologies Used](#technologies-used)
- [Contributors](#contributors)
- [Screenshots](#screenshots)
- [License](#license)


## Features

- **Dynamically Modify the System:** Modify, Change the whole system in accordance to your property.

- **Room Listings Management:** Create, View, Update, and Delete rooms with ease.

- **Bed Listings Management:** Create, View, Update, and Delete beds with ease.

- **Tenant Information Management:** Create, View, Update, and Delete Tenants details. Maintain accurate records of tenant details

- **Service Requests:** Allow tenants to submit maintenance and service requests online.

- **Notices and Announcements:** Communicate important updates and notices to tenants effectively.

- **Events Management:** Organize and share events within the residential community.

- **Complaints Management:** Enable tenants to file complaints for resolution.

- **Rental Transactions:** Track rental payments and generate receipts.

- **User Authentication:** Secure login system for administrators and tenants.


## Getting Started

To run Dormify on your local machine, follow these steps:

1. **Clone the repository and navigate**:
   ```bash
   git clone https://github.com/Caelli22/Dormify.git
   cd dormify 
   ```

2. **Install Dependencies**: Ensure you have Composer installed, then run:

    ```bash
    composer install
    ```

3. **Importing the database**:
    - From dormify/assets/db_mysql import `dormify.sql` to your local phpmyAdmin
    - Configure the database in dormify/application/config/database.php

4. **For Migration and Development Server**: Ensure you have Composer installed, then run:

    ```bash
    php spark migrate
    ```

    ```bash
    php spark serve
    ```
    Access the application at `http://localhost:8080`

## Technologies Used

- **PHP**: Server-side scripting language.
- **CodeIgniter 4**: PHP framework for web application development.
- **MySQL**: Relational database management system.
- **JavaScript**: Client-side scripting.
- **HTML5 & CSS3(Bootstrap)**: Markup and styling for the frontend.
- **Composer**: Dependency management for PHP

## Contributors

- **Project Leader & Lead Developer:** [Dave Bryan Ico](https://www.facebook.com/kaeli.leiven) - Responsible for leading the team, leading the development process and overseeing the development of core functionalities.

- **Developer:** [Elijah Joshua Dimaculangan](https://www.facebook.com/storm.12162003) - Focused on development and feature integrations.

- **UI/UX & Documentation:** [Maria Jemia Daniela Palma](https://www.facebook.com/Jeimeiya) - Designed the user interface, enhanced user experience, and documentation including user manuals and guidelines.

- **Frontend & Developer:** [Joshua Jay Federico](https://www.facebook.com/joshuajay.federico) - Worked on integrating frontend features and supported both backend and UI development.


## Screenshots
![Screenshot 1](https://github.com/Caelli22/Dormify/blob/main/screenshots/1.png)
![Screenshot 2](https://github.com/Caelli22/Dormify/blob/main/screenshots/2.png)
![Screenshot 3](https://github.com/Caelli22/Dormify/blob/main/screenshots/3.png)
![Screenshot 4](https://github.com/Caelli22/Dormify/blob/main/screenshots/4.png)

## License
This project is licensed under the MIT License, allowing you to use, modify, and distribute the code, provided you include the original copyright and license notice in any copy of the code or substantial portion of the software.

***

Thank you for exploring Dormify! For any questions or feedback, feel free to reach out to our team. 