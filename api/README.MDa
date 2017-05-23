----------- Auth -----------
Login To Application
URL: api/v1/auths/login
Method: POST
Data Params:
    Required:
        username=[string],
        password=[string]
    Example request
    {
	"username":"your username here",
	"password":"your password here"
    }
Success Response:   
    Code: 200 
    Content: {"access_token": "some access token here"}
Error Response:
    Code: 422 
    Content: 
        [
          {
            "field": "password",
            "message": "Incorrect username or password."
          }
        ]
SignUp
URL: api/v1/auths/signup
Method: POST
Data Params:
    Required:
        username=[string],
        email=[string],
        password=[string]
    Example request
    {
	"username":"your username here",
	"email":"your email here",
	"password":"your password here"
    }
Success Response:   
    Code: 201 
    Content: {"access_token": "some access token here"}
Error Response:
    Code: 422 
    Content: 
        [
            {
              "field": "username",
              "message": "Username cannot be blank."
            },
            {
              "field": "email",
              "message": "This email address has already been taken."
            }
        ]
----------- Boards -----------
Create Board
URL: api/v1/boards
Method: POST
Header:
    Authorization: Bearer "your access token here"
Data Params:
    Required:
        title=[string],
        isPrivate=[integer:0 or 1]
    Optional:
        content=[string]
    Example request
        {
            "title":"board title",
            "isPrivate":"1"
        }
Success Response:   
    Code: 201
    Content:
        {
            "title": "board title",
            "isPrivate": "1",
            "content": "content",
            "user_id": 1,
            "create_at": "2017-11-11 09:42:36",
            "id": 9
        }
Error Response:
    Code: 422
    Content:
        [
            {
              "field": "isPrivate",
              "message": "Is Private cannot be blank."
            }
        ]
Update Board
URL: api/v1/boards/:id
Method: PUT
Header:
    Authorization: Bearer "your access token here"
Data Params:
    Required:
        title=[string],
        isPrivate=[integer:0 or 1]
    Optional:
        content=[string]
    Example request
        {
            "title":"board title",
            "isPrivate":"1"
        }
Success Response:   
    Code: 200
    Content:
        {
            "title": "board title",
            "isPrivate": "1",
            "content": "content",
            "user_id": 1,
            "create_at": "2017-11-11 09:42:36",
            "id": 9
        }
Error Response:
    Code: 422
    Content:
        [
            {
              "field": "isPrivate",
              "message": "Is Private cannot be blank."
            }
        ]
Delete Board
URL: api/v1/boards/:id
Method: DELETE
Header:
    Authorization: Bearer "your access token here"
Success Response:   
    Code: 204
Get Your Boards
URL: api/v1/boards
Method: GET
Header:
    Authorization: Bearer "your access token here"
Success Response:   
    Code: 200
    Content:
        [
            {
              "id": 4,
              "user_id": 1,
              "title": "title",
              "isPrivate": 0,
              "content": null,
              "update_at": "2017-02-09 21:03:45",
              "create_at": "2017-09-09 18:03:45"
            },
            {
              "id": 6,
              "user_id": 1,
              "title": "admin",
              "isPrivate": 0,
              "content": null,
              "update_at": "2017-02-09 21:03:45",
              "create_at": "2017-09-09 18:03:45"
            },
          ]
View Board
URL: api/v1/boards/:id
Method: GET
Header:
    Authorization: Bearer "your access token here"
Success Response:   
    Code: 200
    Content:
<<<<<<< HEAD
        [
            {
                "id": 4,
                "user_id": 1,
                "title": "title",
                "isPrivate": 0,
                "content": null,
                "update_at": "2017-02-09 21:03:45",
                "create_at": "2017-09-09 18:03:45"
            }
        ]
----------- TicketTypes -----------
Create Tickets
URL: api/v1/tickets
Method: POST
Header:
    Authorization: Bearer "your access token here"
Data Params:
    Required:
        type_id=[integer],
        board_id=[integer],
        x=[integer],
        y=[integer],
        w=[integer],
        h=[integer],
        v=[integer],
        title=[varchar]

    Optional:
        content=[string]
    
    Example request
        {
            "board_id":"8",
            "type_id":"1",
            "x":"2",
            "y":"3",
            "w":"4",
            "h":"4",
            "v":"4",
            "title":"title"
        }
	

Success Response:   
    Code: 201
    Content:
        {
            "board_id":"8",
            "type_id":"1",
            "x":"2",
            "y":"3",
            "w":"4",
            "h":"4",
            "v":"4",
            "title":"title",
            "id":5
        }
Error Response:
    Code: 422
    Content:
        [
            {
            "field":"title",
            "message":"Title cannot be blank."
            }
        ]
Update Ticket
URL: api/v1/tickets/:id
Method: PUT
Header:
    Authorization: Bearer "your access token here"
Data Params:
    Required:
        type_id=[integer],
        board_id=[integer],
        x=[integer],
        y=[integer],
        w=[integer],
        h=[integer],
        v=[integer],
        title=[varchar]
    Optional:
        content=[string]
    Example request
        {
            "board_id":"8",
            "type_id":"1",
            "x":"26",
            "y":"3",
            "w":"46",
            "h":"4",
            "v":"4",
            "title":"title2",
        }
Success Response:   
    Code: 200
    Content:
        {       
            "board_id":"8",
            "type_id":"1",
            "x":"26",
            "y":"3",
            "w":"46",
            "h":"4",
            "v":"4",
            "title":"title2",
            "content": null,
            "update_at": "2017-02-09 21:03:45",
            "create_at": "2017-09-09 18:03:45" 
        }
Error Response:
    Code: 422
    Content:
        [
            {
              "field": "type_id",
              "message": "Type_id cannot be blank."
            }
        ]
Delete Ticket
URL: api/v1/tickets/:id
Method: DELETE
Header:
    Authorization: Bearer "your access token here"
Success Response:   
    Code: 204
View Tickets
URL: api/v1/tickets/:id
Method: GET
Header:
    Authorization: Bearer "your access token here"
Success Response:   
    Code: 200
    Content:
        [
            {
                "id": 5,
                "type_id": 1,
                "board_id": 8,
                "x": 2,
                "y": 3,
                "w": 4,
                "h": 4,
                "v": 4,
                "title": "title",
                "content": null,
                "update_at": "2017-02-14 20:00:16",
                "create_at": "2017-02-14 20:00:16"
            }   
        ]
        {
          "id": "9",
          "user_id": "4",
          "title": "test",
          "isPrivate": "0",
          "content": "tst",
          "update_at": "2017-02-14 00:14:08",
          "create_at": "2017-02-12 09:39:31",
          "tickets": []
        }
----------- TicketTaskTypes -----------
Create TicketTaskTypes
URL: api/v1/ticket-tasks
Method: POST
Header:
    Authorization: Bearer "your access token here"
Data Params:
    Required:
        task_type_id = [integer],
        ticket_id = [integer],
        title = [varchar],
        order = [integer],
    Optional:
        content = [string],
        status = [ENUM('ongoing','canceled', 'completed') DEFAULT 'ongoing'],
        completed = [dateTime],
    Example request
        {
            "task_type_id" : 1,
            "ticket_id" : 3,
            "title" : "title",
            "order" : 3
        }
Success Response:   
    Code: 201
    Content:
        {
            "task_type_id": 1,
            "ticket_id": 3,
            "title": "title",
            "order": 3,
            "id": 6
        }
Error Response:
    Code: 422
    Content:
        [
            {
                "field":"order",
                "message":"Order cannot be blank."
            }
        ]
Update TicketTaskTypes
URL: api/v1/ticket-tasks/:id
Method: PUT
Header:
    Authorization: Bearer "your access token here"
Data Params:
    Required:
        task_type_id = [integer],
        ticket_id = [integer],
        title = [varchar],
        order = [integer],
    Optional:
        content=[string]
    Example request
        {
            "task_type_id" : 1,
            "ticket_id" : 3,
            "title" : "updated-title",
            "order" : 3
        }
Success Response:   
    Code: 200
    Content:
        {       
            "id": 1,
            "task_type_id": 1,
            "ticket_id": 3,
            "title": "updated-title",
            "content": null,
            "status": "ongoing",
            "order": 3,
            "completed": null,
            "update_at": "2017-03-05 13:31:00",
            "create_at": "2016-04-05 13:31:00"
        }
Error Response:
    Code: 403
    Content:
        [
            {
                "name":"Forbidden",
                "message":"",
            }
        ]
Delete TicketTaskTypes
URL: api/v1/ticket-tasks/:id
Method: DELETE
Header:
    Authorization: Bearer "your access token here"
Success Response:   
    Code: 204