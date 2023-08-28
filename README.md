## Setup Instructions

1. **Clone Repository:**
   
   Clone the repository to your local machine.

2. **Create .env File:**
   
   Create a `.env` file in the root directory of the project.

3. **Configure Environment:**
   
   Open the `.env` file and configure the MySQL database connection and your environment key.

4. **Migrate Database:**
   
   Run the following command to migrate the database tables:

   ```sh
   ./vendor/bin/sail migrate

5. **Seed to Database:**
   
   Run the following command to seed to database tables:

   ```sh
   ./vendor/bin/sail db:seed

Launch app and enjoy

**Note:** if you run into run time error running sail run 

    ```sh
    docker run --rm -v $(pwd):/opt -w /opt laravelsail/php80-composer:latest composer install