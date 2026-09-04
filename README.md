# ITRACKB4 - Laboratory Activity 3

## Video Game Collection

This project is a simple Laravel application about video games.
It has a game list, detail pages, a featured game, and a filter
for game genres.

## Routes

- `/games` - shows all video games.
- `/games/featured` - shows the featured game.
- `/games/{id}` - shows the details of a game.
- `/games/filter/{value}` - filters games by genre.
- `/games/filter` - shows all games when there is no filter.

## Questions

### 1. Why must `/games/featured` be placed before `/games/{id}`?

The featured route should be placed first because Laravel checks routes
from top to bottom. If the `{id}` route comes first, Laravel may treat
"featured" as an ID. Placing the featured route first makes sure that
the correct page is displayed.

### 2. What happens when a nonexistent ID is requested?

The controller checks if the ID exists in the game data. If the ID does
not exist, `abort(404)` is used. This displays a 404 Not Found page.

### 3. Why are named routes useful? What can break if we do not use them?

Named routes make links easier to manage because we can use the route
name instead of typing the URL directly. If a URL changes later,
hard-coded links may stop working. Named routes make the application
easier to maintain.

## How to Run

1. Open the project folder in the terminal.
2. Run `php artisan serve`.
3. Open the local Laravel URL in a browser.
4. Visit `/games` to view the video game collection.

## Author

Samson Idanan Jr.