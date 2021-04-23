//To get all the users

/**
 *
 * @api {get} /users To get the all user
 * @apiName fetch-all-users
 * @apiGroup User
 *
 * @apiSuccess (UserDetails) {Object[]} firstname The firstname of the user
 * @apiSuccessExample {json} Success-Response:
 * [
 * {
 * firstname:"JOhn"
 * lastname:"Doe"
 * age:23
 * email:"johndoe@gmail.com"
 * },{
 * firstname:"Deep"
 * lastname:"Patel"
 * age:23
 * email:"deep@gmail.com"
 * }
 * ]
 *
 * @apiError (Error) UserNotFound If the url don't return an user
 */

//To fetch a specific user with requested id
/**
 * 
 * @api {get} /users/:id Fetch User with a spcific id
 * @apiName fetch-unique-user
 * @apiGroup User
 * 
 * 
 * @apiParam  {id} id The unique <code>id</code>
 * 
 * @apiSuccess (200) {String} firstName First Name of the user
 * @apiSuccess (200) {String} lastName Last Name of the user
 * @apiSuccess (200) {Number} age Age of the user
 * @apiSuccess (200) {String} email Email of the user
 * 
 * @apiParamExample  {json} Request-Example:
 * {
 *     id: 1234
 * }
 * 
 * 
 * @apiSuccessExample {json} Success-Response:
 * {
 * firstname:"Deep"
 * lastname:"Patel"
 * age:23
 * email:"deep@gmail.com"
 * }
 * 
 * 
 */

//To add new user
/**
 * 
 * @api {post} /user To add new user
 * @apiName add-user
 * @apiGroup User
 * 
 * 
 * @apiParam (body) {String} firstName First Name of the user
 * @apiParam (body) {String} lastName Last Name of the user
 * @apiParam (body) {Number} age Age of the user
 * @apiParam (body) {String} email Email of the user
 * 
 * 
 * @apiParamExample  {type} Request-Example:
 * {
 * firstname:"Deep"
 * lastname:"Patel"
 * age:23
 * email:"deep@gmail.com"
 * }
 * 
 * @apiSuccess (200) {String} firstName First Name of the user
 * @apiSuccess (200) {String} lastName Last Name of the user
 * @apiSuccess (200) {Number} age Age of the user
 * @apiSuccess (200) {String} email Email of the user
 * 
 * 
 * 
 * @apiSuccessExample {json} Success-Response:
 * {
 * firstname:"Deep"
 * lastname:"Patel"
 * age:23
 * email:"deep@gmail.com"
 * }
 * 
 * 
 */

//To delete an user
/**
 * 
 * @api {delete} /user/:id To delete a user with specific id
 * @apiName delete-user
 * @apiGroup User
 * 
 * 
 * @apiParam  {Number} id Unique <code>id</code> of the user
 * 
 * @apiSuccess (200) {json} message The user with <code>id</code> deleted successfully
 * 
 * @apiParamExample  {type} Request-Example:
 * {
 *     id: 123
 * }
 * 
 * 
 * @apiSuccessExample {type} Success-Response:
 * {
 *     message : The user with <code>id</code> deleted successfully
 * }
 * 
 * 
 */
