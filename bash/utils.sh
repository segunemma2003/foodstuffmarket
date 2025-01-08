#!/bin/bash
# Define color codes
red="\e[31m"
green="\e[32m"
yellow="\e[33m"
blue="\e[34m"
magenta="\e[35m"
cyan="\e[36m"
white="\e[37m"
reset="\e[0m" # Reset formatting back to default

# Function documentation

# @param placeholder (string)  Paceholder to print
# @param value (mixed) User input
# @return (mixed)      User input
# @desc                A brief description of what the function does
# @example             ask "Enter your age: " 20
ask() {
    if [ -n "$2" ]; then
        placeholder="$1 ${green}(default: $2) \n${yellow}> ${reset}"
    else
        placeholder="$1 \n${yellow}> ${reset}"
    fi
    read -p "$(echo -e $placeholder)" value
    # Check if any argument is provided for the value
    if [ -z "$value" ]; then
        value="$2"
    fi
    echo "$value"
}

# Function to retrieve the current version from the .env file
get_current_version() {
    key="VERSION"
    grep -i "^$key=" .env | sed -e "s/^$key=//I" -e 's/^"//' -e 's/"$//'
}

predict_version() {
    # Get the current version from the .env file
    current_version=$(get_current_version)

    # Split the current version into major, minor, and patch components
    IFS='.' read -r major minor patch <<<"$current_version"

    # Increment the patch version
    patch=$((patch + 1))

    # Combine the components back into a version string
    new_version="$major.$minor.$patch"
    echo $new_version
}


# Function to update a specific key-value pair in the .env file
update_env() {
    key="$1"
    if [ -n "$3" ]; then
        file="$3"
    else
        file=".env"
    fi

    if [ -n "$2" ]; then
        value="$2"
    else
        value=$(ask "Enter $key: ")
    fi
    # Escape special characters to prevent errors during sed
    escaped_value=$(echo "$value" | sed 's/[]\/$*.^[]/\\&/g')

    # Check if the key exists in the file
    if grep -q "^$key=" $file; then
        # Update the existing key-value pair
        sed -i "s/^$key=.*$/$key=\"$escaped_value\"/" $file
    else
        # Append the new key-value pair to the file
        echo "$key=\"$escaped_value\"" >>$file
    fi
    echo -e "$key is set to $value\n"
}

# Function to get a specific value in the .env file
get_env() {
    key="$1"
    if [ -z "$key" ]; then
        echo "Please provide a key."
        return 1
    fi

    # Use grep to find the line with the key and extract the value using sed
    value=$(grep "^$key=" .env | sed -e "s/^$key=//" -e 's/^"//' -e 's/"$//')

    if [ -n "$value" ]; then
        echo "$value"
    else
        echo "Key not found in .env file."
        return 1
    fi
}
