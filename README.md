<p align="left">
	<img src="./logo.png" height="100" alt="Telescope logo">
</p>

## Description
Test pour la homepage de Telescope.

## Requirements

- PHP >= 8.3
- Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
- Yarn

## Installation

1. Install project:
	- In the root folder:
   ```sh
   $ composer install
   ```
   - In the main theme folder:
    ```sh
   $ composer install
   $ yarn
   $ yarn build
   ```
2. Duplicate the `.env.example` to create a new `.env` file and update environment variables. Wrap values that may contain non-alphanumeric characters with quotes, or they may be incorrectly parsed.

- Database variables
  - `DB_NAME` - Database name
  - `DB_USER` - Database user
  - `DB_PASSWORD` - Database password
  - `DB_HOST` - Database host
  - Optionally, you can define `DATABASE_URL` for using a DSN instead of using the variables above (e.g. `mysql://user:password@127.0.0.1:3306/db_name`)
- `WP_ENV` - Set to environment (`development`, `staging`, `production`)
- `WP_HOME` - Full URL to WordPress home (https://example.com)
- `WP_SITEURL` - Full URL to WordPress including subdirectory (https://example.com/wp)
- `AUTH_KEY`, `SECURE_AUTH_KEY`, `LOGGED_IN_KEY`, `NONCE_KEY`, `AUTH_SALT`, `SECURE_AUTH_SALT`, `LOGGED_IN_SALT`, `NONCE_SALT`
  - Generate with [wp-cli-dotenv-command](https://github.com/aaemnnosttv/wp-cli-dotenv-command)
  - Generate with [our WordPress salts generator](https://roots.io/salts.html)

3. The main theme is using Sage.
4. If using Local WP as local server, in the site config file `/project-folder/conf/nginx/site.conf.hbs`, set the document root on your webserver to Bedrock's `web` folder: `/path/to/site/web/`
	```sh
	root ~/Sites/project-folder/app/project-name/web;
	```
5. Access WordPress admin at `https://example.com/wp/wp-admin/`
6. To watch any config, dependencies, scripts and style change, run the following command in the theme folder:
	```sh
   $ yarn dev
   ```


## Documentation

Bedrock documentation is available at [https://docs.roots.io/bedrock/master/installation/](https://docs.roots.io/bedrock/master/installation/).

Sage documentation is available at [https://roots.io/sage/docs/installation/](https://roots.io/sage/docs/installation/).
