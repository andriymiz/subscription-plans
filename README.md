# Subscription Service
## Task
Нужно описать архитектуру для Subscription Plans сервиса. Реализация самих методов и логики не нужна. Все должно быть построено с использованием интерфейсов и наследования.

К примеру, на сайте есть три плана, которые несут в себе условия. Нужно создать сервис, который будет управлять этими планами. Должны быть следующие возможности:
1) Смена плана;
2) Продление текущего плана;
3) Проверка на лимиты - может ли пользователь создать юзера.
4) Проверка истекших подписок у пользователей.

Начальные данные:
- Plan A - пользователь может создавать до 10 клиентов
- Plan B - пользователь может создавать до 20 клиентов
- Plan C - пользователь может создавать до 30 клиентов


Что нужно использовать:
- Services
- Interfaces
- Service provider
- Traits (Optional)
- Database (Optional)

## Pay attention on this classes:
- App/Http/Controllers/HomeController
- App/Interfaces/SubscriptionServiceInterface
- App/Interfaces/SubscriptionableInterface
- App/Interfaces/SubscriptionablePlanInterface
- App/Models/Client
- App/Models/Plan
- App/Models/Subscription
- App/Models/User
- App/Providers/SubscriptionServiceProvider
- App/Services/SubscriptionService
- App/Traits/Subscriptionable
- App/Traits/SubscriptionableActions
- App/Traits/SubscriptionableCheckers
- App/Traits/SubscriptionablePlan
- App/Traits/SubscriptionableRelations
- Database/Migrations/CreatePlansTable
- Database/Migrations/CreateSubscriptionsTable
- Database/Migrations/CreateClientsTable
- Database/Seeders/PlanSeeder
