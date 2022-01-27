# SUAI pizza
## Objective
Develop information system ```SUAI pizza``` - pizza delivery service.
## Description of the system
### Custom Roles
The system provides two user roles:
- Administrator - controls current orders and changes their status, has the ability to add new categories and dishes, answers Clients to their questions
- Client - can place an order, find out its status, or ask the Administrator a question of interest
### User interfaces
### Custom scripts
#### Customer
When going to the site, the Client needs to register. To do this, click the ```SingUp``` button in the upper right corner, and then enter all the necessary data. After successful registration, the Client can log in and fully use the functionality of the site - for this you need to click the ```Login``` button in the upper right corner.

To place an order, you need to go to the categories, select the pizza you like and add it to the cart. After that, finalize the order in the basket, indicating all the necessary data for delivery. A list of all completed orders is stored in the ```Your Orders``` section.

Also, the client has the opportunity to contact the administration of the pizzeria through the ```Contact Us``` form, indicating the specific order number - ```orderId```.

In addition, a search by goods has been implemented. When querying in the ```Search``` string, the Client can get both the pizza category and the specific pizza.

#### Administrator
The admin panel is located under a separate link and is not visible to regular clients (```/admin```). The Administrator does not have registration, only authorization is provided - if you really need to register a new Admin, then this can be done by entering new data into the database, setting the field ```userType=1```, where 1 - Admin, 0 - Client.

In the ```Order Details``` section, the Administrator can view the contents of all orders, as well as change their statuses. When a certain status is set, it is possible to assign a courier, indicating his data.

In the ```Category``` section, the Administrator can add/modify/delete categories of pizzas - specifying the name, description and also the image.

In the ```Item``` section, the administrator can add/modify/delete specific pizzas - specifying the name, description and also the image.

The administrator sees all registered users in the system. He can change information about them - name, photo, contact details, as well as change their privileges - upgrade from Client to Administrator. It can also create a new user, bypassing the ```Sign Up``` window.

There is also a section where you can give feedback to Clients, it displays all messages from Clients, and when you click on the ```History``` button, you can see all the answers that the Administrator sent to Clients.


### System components
Used technology stack:
- Apache
- PHP 7.2.24
- JavaScript
- MySQL 14.4
- jquery 3.4.1
- Popper 1.16.0
- Bootstrap 4.4.1

For convenience, clarity, and better readability, the entire code is divided into several files. Files can be divided into groups:
- user interface elements
- Admin panel
- registration and authorization


## Other features

### [Swagger API](https://app.swaggerhub.com/apis/suai-pizza/suai-pizza/1.0.0)

###CI/CD
The CI/CD approach is implemented through Github Actions. Each time you push a tag starting with v*, a Release is automatically created on Github with the tag specified.

### SSL certificate
An SSL certificate allows you to establish a secure HTTPS connection between a user and a website. Issued using Let's Encrypt Cert-bot.

### Custom domain
Added custom domain ```r0binak.design``` via adding A-records on DNS servers.

### Yandex Metrica
A web analytics tool has been added that helps you get visual reports, videos of visitor actions, track traffic sources and evaluate the effectiveness of online and offline advertising.

<img width="861" alt="Снимок экрана 2021-12-25 в 11 45 10" src="https://user-images.githubusercontent.com/80983900/147381263-a6c8cf18-71f4-4858-80a0-29fcaa765817.png">


## How to raise it locally?
1. Install W/L/M AMP
2. Clone the repository
3. Move the local repository to the folder where local projects are hosted
4. Open a browser and go to the desired address
