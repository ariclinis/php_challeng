# php_challeng
DebtGes Intern Software Engineer - PHP Challenge

## API requirements
List of functionalities:

   * Create new user/movie/review
   * Delete user/movie/review
   * Get all users/movies/reviews
   * Get specific user/movie/review
   * Get average rating of movie
   * Get average rating of user

## Functions already Implements

### Create new User

**inputs:** name of user

**constraints:** None

**Use:** curl -X POST http://localhost:**YOUR_PORT**/insertUser?user=**NAME_OF_USER**

**Exemple:** curl -X POST http://localhost:8000/insertUser?user=Ariclene
   * Response: {"id":38,"name":"Ariclene","created_at":"2020-07-22T20:48:17.000000Z","updated_at":"2020-07-22T20:48:17.000000Z"}


### Delete new User

**inputs:** id of user

**constraints:** None

**Use:** curl -X DELETE http://localhost:**YOUR_PORT**/insertUser/**ID_OF_USER**

**Exemple:** curl -X DELETE http://localhost:8000/deleteUser/15
   * Response: {"id":15,"name":"mario","created_at":"2020-07-22T10:22:33.000000Z","updated_at":"2020-07-22T10:22:33.000000Z"}


### Get all Users

**inputs:** none

**constraints:** None

**Use:** curl -X GET http://localhost:**YOUR_PORT**/getAllUsers

**Exemple:** curl -X GET http://localhost:8000/getAllUsers
   * Response:[{"id":1,"name":"Ariclene"},{"id":2,"name":"Dr. Araceli Goyette"},{"id":3,"name":"Lavon Wunsch Jr."},{"id":4,"name":"Garth Franecki"},{"id":5,"name":"Salvador Jacobi"}]