# php_challenge
DebtGes Intern Software Engineer - PHP Challenge

## API requirements
List of functionalities:

   * Create new user/movie/review
   * Delete user/movie/review
   * Get all users/movies/reviews
   * Get specific user/movie/review
   * Get average rating of movie
   * Get average rating of user

## Functions Implements
|**Method**| **Function User**              | **Function Movie**  |                          **Function Review** |
|--| -------------  |                            -------------                        |         ------------- 
|POST| [Create new user](#new_user)   | [Create new movie](#new_movie)      | [Create new review](#new_review) |
|DELETE| [Delete user](#delete_user) | [Delete movie](#delete_movie)           | [Delete review](#delete_review) |
|GET| [Get all users](#get_all_users) | [Get all movies](#get_all_movies) | [Get all reviews](#get_all_reviews) |
|GET| [Get specific user](#get_specific_user)| [Get specific movie](#get_specific_movie) | [Get specific review](#get_specific_reviews)|
|GET|                                       |                                          | [Get average riting of user](#get_avg_user)|
|GET|                                       |                                          | [Get average riting of movie](#get_avg_movie)|

<a id="new_user"></a>

### Create new User

**inputs:** name of user

**constraints:** None

**Use:** curl -X POST http://localhost:YOUR_PORT/insertUser?user=NAME_OF_USER

**Exemple:** curl -X POST http://localhost:8000/insertUser?user=Ariclene
   * Response: {"id":10,"user":"Ariclene","option":"create","status":"success"}


<a id="delete_user"></a>

### Delete User

**inputs:** id of user

**constraints:** None

**Use:** curl -X DELETE http://localhost:YOUR_PORT/deleteUser/ID_OF_USER

**Exemple:** curl -X DELETE http://localhost:8000/deleteUser/15
   * Response: {"id":15,user":"Dr. Alvena Gutmann","option":"delete","status":"success"}

<a id="get_all_users"></a>

### Get all Users

**inputs:** None

**constraints:** None

**Use:** curl -X GET http://localhost:YOUR_PORT/getAllUsers

**Exemple:** curl -X GET http://localhost:8000/getAllUsers
   * Response:[{"id":1,"name":"Ariclene"},{"id":2,"name":"Dr. Araceli Goyette"},{"id":3,"name":"Lavon Wunsch Jr."},{"id":4,"name":"Garth Franecki"},{"id":5,"name":"Salvador Jacobi"}]

<a id="get_specific_user"></a>

   ### Get Specific user

**inputs:** id of user

**constraints:** None

**Use:** curl -X GET http://localhost:YOUR_PORT/getuser/USER_ID

**Exemple:** curl -X GET http://localhost:8000/getUser/16
   * Response:{"id":16,user":"Kade Morar","option":"get","status":"success"}

<a id="new_movie"></a>

### Create new Movie

**inputs:** name of Movie

**constraints:** None

**Use:** curl -X POST http://localhost:YOUR_PORT/insertMovie?Movie=NAME_OF_Movie

**Exemple:** curl -X POST http://localhost:8000/insertMovie?movie=Space
   * Response: {"id":23,"movie":"Space","option":"create","status":"success"}

<a id="delete_movie"></a>


### Delete Movie

**inputs:** id of Movie

**constraints:** None

**Use:** curl -X DELETE http://localhost:YOUR_PORT/deleteMovie/ID_OF_Movie

**Exemple:** curl -X DELETE http://localhost:8000/deleteMovie/15
   * Response: {"id":23,"movie":"Space","option":"delete","status":"success"}

<a id="get_all_movies"></a>

### Get all Movies

**inputs:** None

**constraints:** None

**Use:** curl -X GET http://localhost:YOUR_PORT/getAllMovies

**Exemple:** curl -X GET http://localhost:8000/getAllMovies
   * Response:[{"id":1,"movie":"Cars"},{"id":2,"movie":"Rambo"},{"id":3,"movie":"Madagascar"},{"id":4,"movie":"Broce Lee"}]

<a id="get_specific_movie"></a>


   ### Get Specific Movie

**inputs:** id of movie

**constraints:** None

**Use:** curl -X GET http://localhost:YOUR_PORT/getMovie/Movie_ID

**Exemple:** curl -X GET http://localhost:8000/getMovie/14
   * Response:{"id":14,"movie":"Cars","option":"get","status":"success"}

<a id="new_review"></a>

### Create new Review

**inputs:** id of user, id of movie, rating, review

**constraints:** movie_id and user_id must exist in the database.  

**Use:** curl -X POST 'http://localhost:8000/insertReview?user_id=ID_OF_USER&movie_id=ID_OF_MOVIE&rating=RATING_OF_MOVIE&review=REVIEW_OF_MOVIE'

**Exemple:** curl -X POST 'http://localhost:8000/insertReview?user_id=3&movie_id=2&rating=5&review=Bom'
   * Response: {"id":35,
   "user_id":"3","user_name":"Cornell Hackett","movie_id":"2","movie":"Rambo","review":"Bom","rating":"5","option":"insert","status":"success"}

<a id="delete_review"></a>

### Delete Review

**inputs:** id of Review

**constraints:** None

**Use:** curl -X DELETE http://localhost:YOUR_PORT/deleteReview/ID_OF_Review

**Exemple:** curl -X DELETE http://localhost:8000/deleteReview/15
   * Response: {"id":15,"user_id":"25","user_name":"Rahul Rippin","movie_id":"25","movie":"Cars","review":"Quo inventore ut aut. Vel magnam cumque ipsa incidunt nostrum. Dignissimos facere sunt aliquid hic.","rating":"2","option":"delete","status":"success"}

<a id="get_all_review"></a>

### Get all Reviews

**inputs:** None

**constraints:** None

**Use:** curl -X GET http://localhost:YOUR_PORT/getAllReviews

**Exemple:** curl -X GET http://localhost:8000/getAllReviews
   * Response:[{"id":"5","user_id":"3","name":"Cornell Hackett","movie_id":"1","movie":"Cars","review":"'Ol\u00e1 mundo'","rating":"4"},{"id":"8","user_id":"3","name":"Cornell Hackett","movie_id":"2","movie":"Rambo","review":"Ol\u00e1 mundo","rating":"5"},{"id":"9","user_id":"3","name":"Cornell Hackett","movie_id":"2","movie":"Rambo","review":"Ola mundo","rating":"5"},{"id":"11","user_id":"3","name":"Cornell Hackett","movie_id":"2","movie":"Rambo","review":"Ola mundo","rating":"5"},{"id":"12","user_id":"3","name":"Cornell Hackett","movie_id":"2","movie":"Rambo","review":"Ola mundo","rating":"5"}]
  
<a id="get_specific_review"></a>

   ### Get Specific Review

**inputs:** id of Review

**constraints:** None

**Use:** curl -X GET http://localhost:YOUR_PORT/getReview/Review_ID

**Exemple:** curl -X GET http://localhost:8000/getReview/14
   * Response: {"id":14,"user_id":"41","user_name":"Cynthia Gerhold","movie_id":"41","movie":"Rambo","review":"Non atque sint qui libero qui quam. Velit ab sed eligendi quod porro. Cumque ratione rem facilis.","rating":"2","option":"get","status":"success"}

<a id="get_avg_user"></a>

### Get Average rating of User

**inputs:** id of user

**constraints:** None

**Use:** curl -X GET http://localhost:YOUR_PORT/getAverageRatingOfUser/User_ID

**Exemple:** curl -X GET http://localhost:8000/getAverageRatingOfUser/2
   * Response: [{"average":"4.0","user_id":"2","user_name":"Clement Cruickshank"}]


<a id="get_avg_movie"></a>

### Get Average rating of Movie

**inputs:** id of movie

**constraints:** None

**Use:** curl -X GET http://localhost:YOUR_PORT/getAverageRatingOfMovie/Movie_ID

**Exemple:** curl -X GET http://localhost:8000/getAverageRatingOfMovie/2
   * Response: [{"average":"3.5","movie_id":"2","movie":"Rambo"}]
