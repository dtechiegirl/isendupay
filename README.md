Existing Get Routes:
http://127.0.0.1:8000/api/v1/customers sends a list of all customers
http://127.0.0.1:8000/api/v1/customers/{id} sends a list of individual customer as specified
Expected Json Response
{"data":{"id":1,"name":"","password":"","createdAt":"","updatedAt":""}}
Json Response for created_at  and updated_at for the get all customers is still being updated.
