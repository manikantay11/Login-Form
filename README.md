# Student Registration Form

## Description

This project is a **Student Registration Form** built with HTML, CSS, and JavaScript. It is a responsive and user-friendly form designed to collect user details such as username, password, email, and mobile number with proper validation mechanisms. The form ensures that each field is filled out correctly before proceeding to the next one, enhancing the overall user experience.

## Features

- **Interactive Field Validation:**
  - Each field becomes enabled only after the previous field is correctly filled.
  - Instant feedback for invalid inputs.
- **Password Validation:**
  - Password must include at least 8-25 characters, one uppercase letter, one lowercase letter, one number, and one special character.
- **Email Validation:**
  - Ensures the email follows standard formats.
- **Mobile Number Validation:**
  - Only accepts 10-digit numbers.
- **Background Image:**
  - A visually appealing background image enhances the design.
- **Responsive Design:**
  - Optimized for both desktop and mobile devices.

## Preview

The form includes the following fields:

1. Username
2. Password
3. Confirm Password
4. Email Address
5. Mobile Number

Each field is validated and becomes active only after the previous one is successfully completed.

## Technologies Used

- **HTML5**: For structure and layout.
- **CSS3**: For styling and responsiveness.
- **JavaScript**: For validation and interactivity.

## Setup Instructions

1. Clone this repository to your local machine:
   ```bash
   git clone <repository_url>
   ```
2. Navigate to the project directory:
   ```bash
   cd <project_directory>
   ```
3. Replace `background.jpg` with the path to your desired background image in the CSS section of the HTML file:
   ```css
   background: url('background.jpg') no-repeat center center fixed;
   ```
4. Open the `index.html` file in your browser to view the form.

## How to Use

1. Enter your username (letters only, max 25 characters).
2. Fill in the password field (meeting the required format).
3. Confirm the password.
4. Provide a valid email address.
5. Enter a 10-digit mobile number.
6. Submit the form.

If all fields are correctly filled, you will receive a success message. Otherwise, appropriate error messages will guide you to correct your inputs.

## Validation Details

- **Username**: Accepts only letters (A-Z, a-z), max 25 characters.
- **Password**: At least 8-25 characters, including uppercase, lowercase, number, and special character.
- **Email**: Must follow a standard email format (e.g., [user@example.com](mailto\:user@example.com)).
- **Mobile Number**: Only 10 digits.

## Screenshots

- **Form Design**:
  A visually appealing and minimalistic design with clear instructions for users.
- **Validation Feedback**: Real-time alerts guide users to fix invalid inputs.

## Live demo

 view login form [here]()

## Contribution Guidelines

Contributions are welcome! Please fork the repository and create a pull request with your changes. Ensure that your code is clean and properly documented.

## License

This project is licensed under the MIT License. Feel free to use and modify it as per your needs.

---

Enjoy building and customizing your own student registration form!

