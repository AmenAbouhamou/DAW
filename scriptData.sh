#!/bin/bash

# Set the container name and database name
CONTAINER_NAME="db"
DATABASE_NAME="project"

# Set the dump file name and location
DUMP_FILE="./model/data/dumpfile.sql"

# Execute the mysqldump command on the container
docker exec -i $CONTAINER_NAME mysqldump -u root --password=root $DATABASE_NAME < $DUMP_FILE
