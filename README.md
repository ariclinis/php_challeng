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
   * Response: {"id":10,"user":"Ariclene","option":"create","status":"success"}


### Delete User

**inputs:** id of user

**constraints:** None

**Use:** curl -X DELETE http://localhost:YOUR_PORT/deleteUser/ID_OF_USER

**Exemple:** curl -X DELETE http://localhost:8000/deleteUser/15
   * Response: {"id":15,user":"Dr. Alvena Gutmann","option":"delete","status":"success"}


### Get all Users

**inputs:** None

**constraints:** None

**Use:** curl -X GET http://localhost:YOUR_PORT/getAllUsers

**Exemple:** curl -X GET http://localhost:8000/getAllUsers
   * Response:[{"id":1,"name":"Ariclene"},{"id":2,"name":"Dr. Araceli Goyette"},{"id":3,"name":"Lavon Wunsch Jr."},{"id":4,"name":"Garth Franecki"},{"id":5,"name":"Salvador Jacobi"}]

   ### Get Specific user

**inputs:** user_id

**constraints:** None

**Use:** curl -X GET http://localhost:YOUR_PORT/getuser/USER_ID

**Exemple:** curl -X GET http://localhost:8000/getUser/16
   * Response:{"id":16,user":"Kade Morar","option":"get","status":"success"}


### Create new Movie

**inputs:** name of Movie

**constraints:** None

**Use:** curl -X POST http://localhost:YOUR_PORT/insertMovie?Movie=NAME_OF_Movie

**Exemple:** curl -X POST http://localhost:8000/insertMovie?movie=Space
   * Response: {"id":23,"movie":"Space","option":"create","status":"success"}


### Delete Movie

**inputs:** id of Movie

**constraints:** None

**Use:** curl -X DELETE http://localhost:YOUR_PORT/deleteMovie/ID_OF_Movie

**Exemple:** curl -X DELETE http://localhost:8000/deleteMovie/15
   * Response: {"id":23,"movie":"Space","option":"delete","status":"success"}


### Get all Movies

**inputs:** None

**constraints:** None

**Use:** curl -X GET http://localhost:YOUR_PORT/getAllMovies

**Exemple:** curl -X GET http://localhost:8000/getAllMovies
   * Response:[{"id":1,"movie":"Cars"},{"id":2,"movie":"Rambo"},{"id":3,"movie":"Madagascar"},{"id":4,"movie":"Broce Lee"}]

   ### Get Specific Movie

**inputs:** movie_id

**constraints:** None

**Use:** curl -X GET http://localhost:YOUR_PORT/getMovie/Movie_ID

**Exemple:** curl -X GET http://localhost:8000/getMovie/14
   * Response:{"id":14,"movie":"Cars","option":"get","status":"success"}

### Create new Review

**inputs:** name of Review

**constraints:** movie_id and user_id must exist in the database.  

**Use:** curl -X POST 'http://localhost:8000/insertReview?user_id=ID_OF_USER&movie_id=ID_OF_MOVIE&rating=RATING_OF_MOVIE&review=REVIEW_OF_MOVIE'

**Exemple:** curl -X POST 'http://localhost:8000/insertReview?user_id=3&movie_id=2&rating=5&review=Bom'
   * Response: {"id":35,
   "user_id":"3","user_name":"Cornell Hackett","movie_id":"2","movie":"Rambo","review":"Bom","rating":"5","option":"insert","status":"success"}


### Delete Review

**inputs:** id of Review

**constraints:** None

**Use:** curl -X DELETE http://localhost:YOUR_PORT/deleteReview/ID_OF_Review

**Exemple:** curl -X DELETE http://localhost:8000/deleteReview/15
   * Response: {"id":15,"user_id":"25","user_name":"Rahul Rippin","movie_id":"25","movie":"Cars","review":"Quo inventore ut aut. Vel magnam cumque ipsa incidunt nostrum. Dignissimos facere sunt aliquid hic.","rating":"2","option":"delete","status":"success"}


### Get all Reviews

**inputs:** None

**constraints:** None

**Use:** curl -X GET http://localhost:YOUR_PORT/getAllReviews

**Exemple:** curl -X GET http://localhost:8000/getAllReviews
   * Response:[{"id":"5","user_id":"3","name":"Cornell Hackett","movie_id":"1","movie":"Cars","review":"'Ol\u00e1 mundo'","rating":"4"},{"id":"8","user_id":"3","name":"Cornell Hackett","movie_id":"2","movie":"Rambo","review":"Ol\u00e1 mundo","rating":"5"},{"id":"9","user_id":"3","name":"Cornell Hackett","movie_id":"2","movie":"Rambo","review":"Ola mundo","rating":"5"},{"id":"11","user_id":"3","name":"Cornell Hackett","movie_id":"2","movie":"Rambo","review":"Ola mundo","rating":"5"},{"id":"12","user_id":"3","name":"Cornell Hackett","movie_id":"2","movie":"Rambo","review":"Ola mundo","rating":"5"}]
  
  
   ### Get Specific Review

**inputs:** id of Review

**constraints:** None

**Use:** curl -X GET http://localhost:YOUR_PORT/getReview/Review_ID

**Exemple:** curl -X GET http://localhost:8000/getReview/14
   * Response: {"id":14,"user_id":"41","user_name":"Cynthia Gerhold","movie_id":"41","movie":"Rambo","review":"Non atque sint qui libero qui quam. Velit ab sed eligendi quod porro. Cumque ratione rem facilis.","rating":"2","option":"get","status":"success"}