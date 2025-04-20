-- Table: users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_type ENUM('parent', 'learner') DEFAULT 'parent' NOT NULL,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    remember_token VARCHAR(100) NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    location VARCHAR(255) NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

-- Table: learners
CREATE TABLE learners (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    grade_level VARCHAR(255) NULL,
    date_of_birth DATE NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Table: subjects
CREATE TABLE subjects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    subject_name VARCHAR(255) NOT NULL,
    subject_type ENUM('core', 'practical') NOT NULL,
    description TEXT NULL
);

-- Table: curricula
CREATE TABLE curricula (
    id INT AUTO_INCREMENT PRIMARY KEY,
    curriculum_name VARCHAR(255) NOT NULL,
    description TEXT NULL
);

-- Table: lessons
CREATE TABLE lessons (
    id INT AUTO_INCREMENT PRIMARY KEY,
    subject_id INT NOT NULL,
    curriculum_id INT NULL,
    grade_level VARCHAR(255) NULL,
    lesson_title VARCHAR(255) NOT NULL,
    lesson_content TEXT NOT NULL,
    resource_type VARCHAR(255) NOT NULL,
    file_path VARCHAR(255) NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (subject_id) REFERENCES subjects(id) ON DELETE CASCADE,
    FOREIGN KEY (curriculum_id) REFERENCES curricula(id) ON DELETE CASCADE
);

-- Table: assessments
CREATE TABLE assessments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    subject_id INT NOT NULL,
    curriculum_id INT NULL,
    grade_level VARCHAR(255) NULL,
    assessment_title VARCHAR(255) NOT NULL,
    assessment_content TEXT NOT NULL,
    file_path VARCHAR(255) NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (subject_id) REFERENCES subjects(id) ON DELETE CASCADE,
    FOREIGN KEY (curriculum_id) REFERENCES curricula(id) ON DELETE CASCADE
);

-- Table: user_progress
CREATE TABLE user_progress (
    user_id INT NOT NULL,
    lesson_id INT NULL,
    assessment_id INT NULL,
    progress INT NULL,
    score INT NULL,
    completion_date TIMESTAMP NULL,
    PRIMARY KEY (user_id, lesson_id, assessment_id),
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (lesson_id) REFERENCES lessons(id) ON DELETE CASCADE,
    FOREIGN KEY (assessment_id) REFERENCES assessments(id) ON DELETE CASCADE
);

--Indexes
CREATE INDEX idx_users_email ON users (email);
CREATE INDEX idx_lessons_subject_id ON lessons (subject_id);
CREATE INDEX idx_assessments_subject_id ON assessments (subject_id);
CREATE INDEX idx_user_progress_user_id ON user_progress (user_id);
