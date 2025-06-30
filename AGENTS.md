# AGENTS.md

## Build, Lint, and Test Commands
- **Build frontend:** `npm run build`
- **Dev server:** `npm run dev` or `composer dev`
- **Run all tests:** `composer test` or `php artisan test`
- **Run a single test:** `php artisan test --filter <TestName>` or for Pest: `./vendor/bin/pest --filter <TestName>`
- **Lint PHP:** `./vendor/bin/pint`

## Code Style Guidelines
- **Imports:** Use ES module imports for JS, PSR-4 autoloading for PHP.
- **Formatting:** Use Prettier for JS, Pint for PHP. 2 spaces for JS, PSR-12 for PHP.
- **Types:** Prefer explicit types in PHP (type hints, return types). JS is untyped.
- **Naming:** camelCase for JS, snake_case for PHP variables, PascalCase for classes.
- **Error Handling:** Use try/catch in JS, exceptions in PHP. Always handle errors gracefully.
- **Testing:** Use Pest for PHP tests. Place feature tests in `tests/Feature`. This project doesn't use unit tests.
- **Other:** Follow Laravel and Vite conventions. No Cursor or Copilot rules present.

Use the make command in Laravel to generate boilerplate code for various components like controllers, models, migrations, requests, and more. For example, php artisan make:model Post creates a new model named Post.
