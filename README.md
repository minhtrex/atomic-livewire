# Atomic-livewire
This project provides examples that are using Laravel livewire framework with Atomic design methodology.

# Atomic design's basic concepts
atoms: This folder contains the smallest and most basic building blocks of the application, such as buttons, inputs. Atoms should be highly reusable and not contain any business logic.

molecules: Molecules are composed of one or more atoms and represent more complex UI elements such as password input and search bar.

organisms: Organisms are groups of molecules and atoms that form a complete functional section of your application. For instance, a login form with input fields, a button, and error messages.

# Combine Atomic design with Laravel livewire folder structure

| Atomic concept | Project folder | Project folder |
| ---- | ---- | ---- |
| atoms | app/Livewire/Atoms | contains components code |
| atoms | resources/views/livewire/atoms | contains component blade template |
| molecules | app/Livewire/Molecules | contains component code |
| molecules | resources/views/livewire/molecules | contains component blade template |
| organisms | app/Livewire/Organisms | contains component code |
| organisms | resources/views/livewire/organisms | contains component blade template |

# Pre-requiresite
PHP installed
Laravel installed (via Composer)

# Examples
* atoms -> button, textbox, label
* molecules -> textbox + label
* organisms -> login form

# How to run
```
php artisan serve
`````

On browser open following link `http://localhost:8000/home`.

# License

This source code is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
