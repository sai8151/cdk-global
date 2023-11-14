-- Create a 'pollution_reports' table to store pollution reports with location information
CREATE TABLE pollution_reports (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pollution_type VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    latitude DECIMAL(10, 6) NOT NULL,
    longitude DECIMAL(10, 6) NOT NULL,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
