#!/usr/bin/env bash
source ./bash/utils.sh

# Ask for the version, defaulting to the predicted version
version=$(ask "Enter version: " "$(predict_version)")

echo -e "Updating composer...\n"
cmd_output=$(composer update 2>&1)
if [ $? -eq 0 ]; then
    echo -e "Composer updated."
    else
    echo -e "Error: \n$cmd_output"
fi

echo -e "Installing Node Modules...\n"
cmd_output=$(npm i 2>&1)
if [ $? -eq 0 ]; then
    echo -e "Node modules installed."
    else
    echo -e "Error: \n$cmd_output"
fi

echo -e "Building Assets...\n"
cmd_output=$(npm i 2>&1)
if [ $? -eq 0 ]; then
    echo -e "Build Success."
    else
    echo -e "Error: \n$cmd_output"
fi

echo "Removing assets ...\n" 
rm -rf node_modules

# Set project path and output path
project_path="$(pwd)/"
cd ../
out_path="$(pwd)/maildoll-build/"

# Inform the user and prepare the output directory
echo -e "Preparing to copy files..."
rm -rf "$out_path"
mkdir -p "$out_path"

# Use rsync to copy files with progress
echo -e "Copying files to $out_path..."
cp -rf "$project_path" "$out_path"

# Change to the output directory
cd $out_path

# Inform the user that the copy operation is complete
echo -e "${green}Files copied to $out_path ${reset}\n"

echo -e "${red}Removing unnecessary files...${reset}\n"
#Array of directory names
unnecessaryFiles=(
    "tests"
    "stubs"
    "public/storage"
    "storage/app/public"
    ".github"
    "bash"
    "public/temp"
    "docker"
    ".devcontainer"
    ".idea"
    ".vscode"
    "phpunit.xml"
    "README.md"
    ".git"
    "pint.json"
)

#Loop through each directory and remove it
for dir in "${unnecessaryFiles[@]}"; do
    rm -rf "$dir"
    echo -e "Removed $dir\n"
done

echo -e "Setup env\n"
# rm -rf ".env"
# cp .env.production .env

change_version(){
#Update the version in .env
update_env "VERSION" $version
update_env "VERSION" $version ".env.example"
update_env "VERSION" $version ".env.production"
update_env "VERSION" $version ".env.local"
# Use sed to update the version
sed -i 's/"version": "[^"]*"/"version": "'"$version"'"/' package.json
}
#Update version and zip the files
change_version
zip -r maildoll-$version.zip .

cd $project_path
change_version

echo -e "Maildoll Updated to $version\n. Open files in $out_path"