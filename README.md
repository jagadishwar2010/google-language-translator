# Laravel Google Translate API Example

This is an example Laravel project that demonstrates how to use the Google Translate API to automatically detect the source language of an input text and translate it to a target language.

## Getting Started

### Prerequisites

Before you can use this project, you will need the following:

- PHP 7.3 or later
- Composer
- A Google Cloud Platform (GCP) project with the Translate API enabled
- A service account in the GCP project with a JSON key file

### Installing

To install the project, follow these steps:

1. Clone the repository:

   ```bash
   git clone https://github.com/jagadishwar2010/laravel-google-translate.git

2. Install the dependencies using Composer:
   ```bash
   composer install

3. Copy the `.env.example` file to `.env` and update the following variables:
   ```bash
   GOOGLE_APPLICATION_CREDENTIALS=/path/to/your/service_account.json

4. Start the Laravel development server:
    ```bash
   php artisan serve

5. Access the application in your web browser at `http://localhost:8000`.

## Usage

To use the translation feature, you can send a POST request to the `/translate` endpoint with the following parameters:

- `text`: The input text to be translated.
- `target_language`: The target language for the translation.

The source language will be automatically detected using the Google Translate API.

The response will be a JSON object with the following fields:

- `source_language`: The detected source language of the input text.
- `target_language`: The target language for the translation.
- `translation`: The translated text.


## Acknowledgments

This project is based on the official [Google Cloud Translate API PHP example](https://github.com/GoogleCloudPlatform/php-docs-samples/tree/master/translate/cloud-client).

