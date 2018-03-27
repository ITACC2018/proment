Desarrollo de Plugin 
====================

Nota : el plugin API es **considerado alpha** en estos momentos.

Los plugins son útiles para extender las funcionalidades básicas de Kanboard , la adición de características , la creación de temas o cambiar el comportamiento por defecto .

Los creadores de plugins deben especificar explícitamente las versiones compatibles de Kanboard . El código interno de Kanboard puede cambiar con el tiempo y su extensión debe ser probado con nuevas versiones . Compruebe siempre el [ChangeLog](https://github.com/Kanboard/Kanboard/blob/master/ChangeLog) para realizar los cambios.

- [Crear tu plugin](plugin-registration.markdown)
- [Usar plugins hooks](plugin-hooks.markdown)
- [Eventos](plugin-events.markdown)
- [Rescribir compartamientos por default en la aplicación](plugin-overrides.markdown)
- [Agregar plugins para migrar esquemas](plugin-schema-migrations.markdown)
- [Personalizar rutas](plugin-routes.markdown)
- [Agregar helpers](plugin-helpers.markdown)
- [Agregar trasportes de email ](plugin-mail-transports.markdown)
- [Agregar tipos de notificaciones](plugin-notifications.markdown)
- [Agregar acciones automaticas](plugin-automatic-actions.markdown)
- [Adjuntar metados para usuarios,tareas y proyectos](plugin-metadata.markdown)
- [Arquitectura de autenticación](plugin-authentication-architecture.markdown)
- [Registración de plugins de autenticación](plugin-authentication.markdown)
- [Arquitectura de autorización](plugin-authorization-architecture.markdown)
- [Personlizar grupos de proveedores](plugin-group-provider.markdown)
- [Links externos para proveedores](plugin-external-link.markdown)
- [Agregar avatar a proveedores](plugin-avatar-provider.markdown)
- [Cliente LDAP](plugin-ldap-client.markdown)

Ejemplos de plugins
-------------------

- [SMS Two-Factor Authentication](https://github.com/Kanboard/plugin-sms-2fa)
- [Reverse-Proxy Authentication with LDAP support](https://github.com/Kanboard/plugin-reverse-proxy-ldap)
- [Slack](https://github.com/Kanboard/plugin-slack)
- [Hipchat](https://github.com/Kanboard/plugin-hipchat)
- [Jabber](https://github.com/Kanboard/plugin-jabber)
- [Sendgrid](https://github.com/Kanboard/plugin-sendgrid)
- [Mailgun](https://github.com/Kanboard/plugin-mailgun)
- [Postmark](https://github.com/Kanboard/plugin-postmark)
- [Amazon S3](https://github.com/Kanboard/plugin-s3)
- [Budget planning](https://github.com/Kanboard/plugin-budget)
- [User timetables](https://github.com/Kanboard/plugin-timetable)
- [Subtask Forecast](https://github.com/Kanboard/plugin-subtask-forecast)
- [Automatic Action example](https://github.com/Kanboard/plugin-example-automatic-action)
- [Theme plugin example](https://github.com/Kanboard/plugin-example-theme)
- [CSS plugin example](https://github.com/Kanboard/plugin-example-css)
