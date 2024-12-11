# Web Decision Support System with SAW Method

### Project Description
This project is a web-based application designed to assist decision-making processes using the **Simple Additive Weighting** (SAW) method. The system aims to support objective, transparent, and efficient selection processes, particularly in recruitment, evaluation, or selection based on specific criteria. Currently, the application focuses on the **recruitment of new lecturers** at Universitas Pamulang but can be easily adapted for other use cases.

### Key Features
- **Criteria and Weight Management**: Add, delete, and adjust the weights of criteria used in evaluations.
- **Data Normalization**: Automatic implementation of the normalization process based on the SAW method.
- **Final Score Calculation**: Generate rankings based on the total scores of each alternative.
- **Interactive Dashboard**: Display analysis results in tables and simple visualizations.
- **Development Support**: Easily customizable for various decision-making needs.

### Technologies Used
- **Programming Languages**: PHP, HTML, CSS, JavaScript
- **Database**: MySQL
- **Framework**: (optional, if using a specific framework, e.g., Laravel or CodeIgniter)

### Installation Instructions
1. Clone this repository to your local machine:
   ```bash
   git clone https://github.com/xxndrew-mr/web-decision-support-system-saw.git
   ```
2. Navigate to the project directory:
   ```bash
   cd web-decision-support-system-saw
   ```
3. Import the database:
   - Locate the SQL file in the `database/` folder (e.g., `saw_database.sql`).
   - Use phpMyAdmin or MySQL CLI to import the file into your MySQL server.
4. Configure the database connection:
   - Open the `config/database.php` file or a similar configuration file.
   - Adjust the settings according to your database server.
5. Run the application on a local server:
   - Use XAMPP, WAMP, or another local server to host the application.
   - Access the application via your browser at `http://localhost/project-folder-name`.

### Usage
1. Enter alternative data (e.g., lecturer candidates).
2. Add criteria and assign appropriate weights.
3. View the calculation results and recommendations generated by the system.

### Development Plans
This project will continue to be developed with the following features:
- **User Authentication**: Login system for administrators and other users.
- **Data Export**: Support for exporting analysis results to PDF or Excel formats.
- **Advanced Visualization**: Addition of interactive charts to support data analysis.
- **API Integration**: Providing a REST API for integration with other systems.
- **Responsive Design**: Optimization for mobile device displays.

### Contribution
We welcome contributions from anyone interested in developing this project. Here are the steps to contribute:
1. Fork this repository.
2. Create a new branch for your feature or fix:
   ```bash
   git checkout -b your-feature-name
   ```
3. Make your changes and commit them:
   ```bash
   git commit -m "Description of changes"
   ```
4. Push your branch to the remote repository:
   ```bash
   git push origin your-feature-name
   ```
5. Create a pull request on GitHub.


### Contact
If you have any questions or suggestions, please contact:
- Name: xxndrew-mr
- Email: andremarshandito@gmail.com
- GitHub: [https://github.com/xxndrew-mr](https://github.com/xxndrew-mr)

Thank you for supporting the development of this project!

