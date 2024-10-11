# GET and POST Globals, Conditional and the Ternary Operator

## Instructions

There are two forms in the web page index.html.  Copy all the files from here to the wampserver folder. 
Initialise a new repository and add all the contents. of this folder before making your first commit.
```
git init
git add .
git commit -m "First commit"
```

### Step 1: Handle GET Requests
- **Task:** Create a new PHP file named `handle_get.php` that processes the get form submission using the `GET` method.
- **Objective:** Retrieve the submitted data using `$_GET` and display it.

- **Git Commands:**
  1. Create a new branch for this task:
     ```git
     git checkout -b handle-get
     ```
  2. After completing the task, commit your changes:
     ```git
     git add handle_get.php
     git commit -m "Implement GET request handling"
     ```

- **Next Step:** Move to Step 2.

---

### Step 2: Handle POST Requests
- **Task:** Create a new PHP file named `handle_post.php` that processes the post form submission using the `POST` method.
- **Objective:** Retrieve the submitted data using `$_POST` and display it.

- **Git Commands:**
  1. Create a new branch for this task:
     ```git
     git checkout -b handle-post
     ```
  2. After completing the task, commit your changes:
     ```git
     git add handle_post.php
     git commit -m "Implement POST request handling"
     ```

- **Next Step:** Move to Step 3.

---

### Step 3: Add Conditional Statements
- **Task:** Modify `handle_get.php` and `handle_post.php` to include conditional logic that reacts to user input.
- **Objective:** Ensure the PHP scripts show different outputs depending on form data.

- **Git Commands:**
  1. Create a new branch for this task:
     ```git
     git checkout -b add-conditionals
     ```
  2. After completing the task, commit your changes:
     ```git
     git add handle_get.php handle_post.php
     git commit -m "Add conditional statements to handle user input"
     ```

- **Next Step:** Move to Step 4.

---

### Step 4: Use the Ternary Operator
- **Task:** Refactor your conditional statements in both `handle_get.php` and `handle_post.php` to use the ternary operator.
- **Objective:** Simplify your code with the ternary operator for conditional logic.

- **Git Commands:**
  1. Create a new branch for this task:
     ```git
     git checkout -b use-ternary
     ```
  2. After completing the task, commit your changes:
     ```git
     git add handle_get.php handle_post.php
     git commit -m "Refactor conditionals to use ternary operator"
     ```

- **Next Step:** Merge everything into the `main` branch.

---

### Merge Instructions for All Branches

Once all tasks are complete and committed, follow these steps to merge everything into the `main` branch.

#### 1. Checkout the `main` branch:
```git
git checkout main
```
#### 2. Merge all branches into main:
git merge handle-get
git merge handle-post
git merge add-conditionals
git merge use-ternary
git push origin main