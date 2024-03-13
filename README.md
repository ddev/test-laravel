# test-laravel for DDEV testing only:

- Clone this repo, add upstream `git remote add upstream https://github.com/laravel/laravel`
- Rebase the default branch `ddev-automated-test` onto the latest tag from `upstream`, resolve conflicts
- Use the [latest Laravel quickstart](https://ddev.readthedocs.io/en/latest/users/quickstart/#laravel) for this repo, do not commit `.ddev`
- `ddev exec "cp .env.example .env && php artisan key:generate"`
- `ddev exec "rm -rf vendor" && ddev composer install && git add vendor -f`
- Download `db.sql.tar.gz` from the latest release and run `ddev import-db --file=db.sql.tar.gz`
- Run Laravel migrations `ddev php artisan migrate`
- Export the db `mkdir -p .tarballs && ddev export-db --gzip=false --file=.tarballs/db.sql && tar -czf .tarballs/db.sql.tar.gz -C .tarballs db.sql`
- Run `git push`, create a new release adding `.tarballs/db.sql.tar.gz` as an asset
- Update the URLs in `ddev/ddev` for the new release (e.g. if the old release was `10.0.5.2` and the new release is `11.0.1.1`, then search for this string in the `ddev/ddev` and replace it with `11.0.1.1`)
- Rerun the tests for Laravel `GOTEST_SHORT=9 make testfullsitesetup`
