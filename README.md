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

**Use:** curl -X POST http://localhost:YOUR_PORT/insertUser?user=NAME_OF_USER

**Exemple:** curl -X POST http://localhost:8000/insertUser?user=Ariclene
   * Response: {"user":"Ariclene","option":"create","status":"success"}


### Delete new User

**inputs:** id of user

**constraints:** None

**Use:** curl -X DELETE http://localhost:YOUR_PORT/deleteUser/ID_OF_USER

**Exemple:** curl -X DELETE http://localhost:8000/deleteUser/15
   * Response: {"user":"Dr. Alvena Gutmann","option":"delete","status":"success"}


### Get all Users

**inputs:** None

**constraints:** None

**Use:** curl -X GET http://localhost:YOUR_PORT/getAllUsers

**Exemple:** curl -X GET http://localhost:8000/getAllUsers
   * Response:[{"id":1,"name":"Ariclene"},{"id":2,"name":"Dr. Araceli Goyette"},{"id":3,"name":"Lavon Wunsch Jr."},{"id":4,"name":"Garth Franecki"},{"id":5,"name":"Salvador Jacobi"}]

   ### Get Specific user

**inputs:** None

**constraints:** None

**Use:** curl -X GET http://localhost:YOUR_PORT/getuser/USER_ID

**Exemple:** curl -X GET http://localhost:8000/getUser/16
   * Response:{"user":"Kade Morar","option":"get","status":"success"}


   ### Create new Movie

**inputs:** name of Movie

**constraints:** None

**Use:** curl -X POST http://localhost:YOUR_PORT/insertMovie?Movie=NAME_OF_Movie

**Exemple:** curl -X POST http://localhost:8000/insertMovie?movie=Space
   * Response: {"movieId":23,"movie":"Space","option":"create","status":"success"}


### Delete new Movie

**inputs:** id of Movie

**constraints:** None

**Use:** curl -X DELETE http://localhost:YOUR_PORT/deleteMovie/ID_OF_Movie

**Exemple:** curl -X DELETE http://localhost:8000/deleteMovie/15
   * Response: {"movieId":23,"movie":"Space","option":"delete","status":"success"}


### Get all Movies

**inputs:** None

**constraints:** None

**Use:** curl -X GET http://localhost:YOUR_PORT/getAllMovies

**Exemple:** curl -X GET http://localhost:8000/getAllMovies
   * Response:[{"id":1,"movie":"Cars"},{"id":2,"movie":"Rambo"},{"id":3,"movie":"Madagascar"},{"id":4,"movie":"Broce Lee"}]

   ### Get Specific Movie

**inputs:** None

**constraints:** None

**Use:** curl -X GET http://localhost:YOUR_PORT/getMovie/Movie_ID

**Exemple:** curl -X GET http://localhost:8000/getMovie/16
   * Response:{"Movie":"Kade Morar","option":"get","status":"success"}