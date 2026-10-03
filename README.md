# ITRACKB4 LA7 - Video Game Collection

## Q1. What is the difference between POST and GET, and what happens when you refresh after a POST?

GET is used when we want to view or request a page, while POST is used when we send data from a form. In this activity, the game form uses POST because it sends a new video game to the controller. After the game is saved, the controller redirects to the game list. This prevents the same POST request from being submitted again when the page is refreshed.

## Q2. What happens when validation fails, and why does the save code not run?

When validation fails, Laravel returns the user to the form and displays the errors. The values that were entered can still be shown using old(). The save code does not continue because the validation did not pass. This prevents an invalid game from being saved to the JSON file.

## Q3. Why does the success message appear once even though the layout is shown on every page?

The success message is stored as a session flash message after a game is successfully saved. The layout checks the session and displays the message when it is available. After the message is shown, the flash message is removed from the session. That is why the message appears once even though the layout is used on every page.

## Author

Samson Idanan Jr.