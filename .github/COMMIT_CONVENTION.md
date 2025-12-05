# Commit Convention

This project uses [Conventional Commits](https://www.conventionalcommits.org/) for commit messages.

## Format

```
<type>(<scope>): <subject>

[optional body]

[optional footer(s)]
```

## Types

| Type       | Description                                           |
| ---------- | ----------------------------------------------------- |
| `feat`     | A new feature                                         |
| `fix`      | A bug fix                                             |
| `docs`     | Documentation only changes                            |
| `style`    | Code style changes (formatting, semicolons, etc.)     |
| `refactor` | Code change that neither fixes a bug nor adds feature |
| `perf`     | Performance improvements                              |
| `test`     | Adding or updating tests                              |
| `build`    | Build system or external dependency changes           |
| `ci`       | CI/CD configuration changes                           |
| `chore`    | Other changes (maintenance tasks)                     |
| `revert`   | Revert a previous commit                              |
| `wip`      | Work in progress (use sparingly)                      |

## Scope (optional)

The scope should be the name of the module/component affected:

- `auth` - Authentication related
- `cart` - Shopping cart
- `checkout` - Checkout process
- `product` - Product management
- `order` - Order processing
- `user` - User management
- `api` - API changes
- `ui` - User interface
- `db` - Database changes
- `config` - Configuration changes

## Examples

```bash
# Feature
feat(cart): add quantity selector to cart items

# Bug fix
fix(checkout): resolve payment processing error on mobile

# Documentation
docs: update API documentation for orders endpoint

# Refactor with breaking change
refactor(api)!: restructure authentication endpoints

BREAKING CHANGE: Auth endpoints moved from /api/auth to /api/v2/auth

# Multiple scopes (use comma)
fix(cart,checkout): resolve total calculation bug
```

## Rules

1. **Subject must be lowercase** - Start with a lowercase letter
2. **No period at end** - Don't end the subject line with a period
3. **Use imperative mood** - "add feature" not "added feature"
4. **Keep subject under 72 characters**
5. **Separate subject from body with blank line**
6. **Use body to explain what and why vs. how**

## Breaking Changes

For breaking changes, add `!` after the type/scope and include `BREAKING CHANGE:` in the footer:

```bash
feat(api)!: remove deprecated endpoints

BREAKING CHANGE: The following endpoints have been removed:
- GET /api/v1/users
- POST /api/v1/auth/login
```

## Git Hooks

This project uses Husky to enforce commit message conventions. Invalid commits will be rejected automatically.

To bypass in emergencies (not recommended):

```bash
git commit --no-verify -m "your message"
```
