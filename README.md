<!-- markdownlint-disable MD013 -->

# Twilio / Slim Base Project

This is a small, almost skeleton project that I base my PHP projects on which underpin [my Twilio tutorials][twilio-tutorials].
It's not intended to be special, nor feature-rich.
Rather, it's designed to save me time getting started building my next PHP project for an upcoming Twilio tutorial.

It:

- Is a small, web-based PHP application based on [the Slim Framework][slim-framework]
- Has one route which returns no body, and a minimum of HTTP headers
- Wraps Slim's `Application` object in a small utility class to make writing maintainable code easier

## Prerequisites

You'll need the following to use the application:

- PHP 8.4 or above
- [Composer][composer] installed globally
- Your preferred code editor or IDE
- Some terminal experience is helpful, though not required

## Quick Start

To create a new project from this project, wherever you store your PHP apps, run the following command:

```bash
composer create-project settermjd/twilio-slim-base-project my-project
```

## Contributing

If you want to contribute to the project, whether you have found issues with it or just want to improve it, here's how:

- [Issues][github-issues]: ask questions and submit your feature requests, bug reports, etc
- [Pull requests][github-prs]: send your improvements

## License

[MIT][mit-license]

## Disclaimer

No warranty expressed or implied. Software is as is.

<!-- Links -->

[composer]: https://getcomposer.org
[github-issues]: https://github.com/settermjd/twilio-slim-base-project/issues
[github-prs]: https://github.com/settermjd/twilio-slim-base-project/pulls
[mit-license]: http://www.opensource.org/licenses/mit-license.html
[slim-framework]: https://www.slimframework.com
[twilio-tutorials]: https://www.twilio.com/en-us/blog/authors/author.msetter

<!-- markdownlint-enable MD013 -->
