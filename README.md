# Hidden File Explorer for WordPress

This project provides a tool that allows WordPress website owners to find hidden files that may have been renamed with a different file extension, such as images or documents. You can run this tool both in a browser and in the console using the `php` command.

## Requirements

Before using this tool, make sure you have the following installed:

- [PHP](https://www.php.net/) (version 5.2 or higher)
- A local web server or web hosting server to use in the browser.

## Use in the Browser

To use this tool in a web browser, follow these steps:

1. Clone or download this repository to your local web server or web hosting.
2. Open your web browser and enter the URL where you have hosted this project.
3. You should see a simple interface that will allow you to upload a file and search for files hidden under another extension.

## Use in the Console

You can use this tool in the console by following these steps:

1. Clone or download this repository to your local system.
2. Open a terminal or command line at the project location.
3. Run the following command:

```shell
php looker.php
```

This will launch the tool in the console and allow you to upload a file and search for files hidden under another extension.

## Functioning

This tool will allow you to select a file and specify the extension under which you think other files are hidden. It will then scan the file for occurrences of that extension, and show you the results.

## Example of Use

Suppose you have a file called `image.jpg`, but it actually contains malicious code `.php`. You can run the `looker.php` script and specify the `.jpg` extension to check for hidden files.

## Important

Please note that this tool is not foolproof and depends on your assumptions about the hidden extension. In addition, it is recommended to use it with caution and in controlled environments. It should not be used for malicious purposes.

We hope this tool is useful to you! If you have questions, problems or suggestions, do not hesitate to contact us.

---
