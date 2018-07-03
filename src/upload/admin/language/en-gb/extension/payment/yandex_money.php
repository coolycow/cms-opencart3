<?php

$_['module_title'] = 'Y.CMS 2.0';
$_['heading_title'] = $_['module_title'];
$_['text_yandex_money'] = '<a target="_blank" href="https://kassa.yandex.ru"><img src="../image/catalog/payment/yandex_money/yandex_money_logo.png" alt="Y.CMS 2.0 от Яндекс.Кассы" /></a>';
$_['kassa_header_description'] = 'Работая с модулем, вы автоматически соглашаетесь с <a href="https://money.yandex.ru/doc.xml?id=527132">условиями его использования</a>.';
$_['kassa_version_string'] = 'Версия модуля';

$_['kassa_breadcrumbs_extension'] = 'Расширения';
$_['kassa_breadcrumbs_home'] = 'Главная';
$_['kassa_breadcrumbs_logs'] = 'Журнал сообщений';
$_['kassa_text_success'] = 'Success';
$_['kassa_page_title'] = 'Настройки Яндекс.Кассы';
$_['kassa_breadcrumbs_heading_title'] = 'Журнал сообщений платежного модуля Яндекс.Деньги';
$_['kassa_test_mode_description'] = 'Вы включили тестовый режим приема платежей. Проверьте, как проходит оплата, и напишите менеджеру Кассы. Он выдаст рабочие shopId и Секретный ключ. <a href="https://yandex.ru/support/checkout/payments/api.html#api__04" target="_blank">Инструкция</a>';

$_['kassa_enable_label'] = 'Включить приём платежей через Яндекс.Кассу';

$_['kassa_shop_id_label'] = 'shopId';
$_['kassa_shop_id_description'] = 'Скопируйте shopId из личного кабинета Яндекс.Кассы';
$_['kassa_shop_id_error_required'] = 'Необходимо указать shopId из личного кабинета Яндекс.Кассы';

$_['kassa_password_label'] = 'Секретный ключ';
$_['kassa_password_description'] = 'Выпустите и активируйте секретный ключ в <a href="https://kassa.yandex.ru/my" target="_blank">личном кабинете Яндекс.Кассы</a>. Потом скопируйте его сюда.';
$_['kassa_password_error_required'] = 'Необходимо указать секретный ключ из личного кабинета Яндекс.Кассы';
$_['kassa_error_invalid_credentials'] = 'Проверьте shopId и Секретный ключ — где-то есть ошибка. А лучше скопируйте их прямо из <a href="https://kassa.yandex.ru/my" target="_blank">личного кабинета Яндекс.Кассы</a>';

$_['kassa_payment_mode_label'] = 'Выбор способа оплаты';
$_['kassa_payment_mode_kassa_label'] = 'На стороне Кассы';
$_['kassa_use_yandex_button_label'] = 'Назвать кнопку оплаты «Заплатить через Яндекс»';
$_['kassa_use_installments_button_label'] = 'Add the Installments payment method to checkout page';
$_['kassa_payment_mode_shop_label'] = 'На стороне магазина';

$_['kassa_payment_method_bank_card'] = 'Банковские карты';
$_['kassa_payment_method_sberbank'] = 'Сбербанк Онлайн';
$_['kassa_payment_method_cash'] = 'Наличные через терминалы';
$_['kassa_payment_method_qiwi'] = 'QIWI Wallet';
$_['kassa_payment_method_alfabank'] = 'Альфа-Клик';
$_['kassa_payment_method_webmoney'] = 'Webmoney';
$_['kassa_payment_method_yandex_money'] = 'Яндекс.Деньги';
$_['kassa_payment_method_mobile'] = 'Баланс мобильного';
$_['kassa_payment_method_installments'] = 'Installments';

$_['kassa_payment_method_error_required'] = 'Пожалуйста, выберите хотя бы один способ из списка';

$_['kassa_display_name_label'] = 'Название платежного сервиса';
$_['kassa_display_name_description'] = 'Это название увидит пользователь';
$_['kassa_default_display_name'] = 'Яндекс.Касса (банковские карты, электронные деньги и другое)';

$_['kassa_send_receipt_label'] = 'Отправлять в Яндекс.Кассу данные для чеков (54-ФЗ)';
$_['kassa_send_receipt_tax_rate_title'] = 'НДС';
$_['kassa_tax_rate_default_label'] = 'Ставка по умолчанию';
$_['kassa_tax_rate_default_description'] = 'Ставка по умолчанию будет в чеке, если в карточке товара не указана другая ставка.';
$_['kassa_tax_rate_1_label'] = 'Без НДС';
$_['kassa_tax_rate_2_label'] = '0%';
$_['kassa_tax_rate_3_label'] = '10%';
$_['kassa_tax_rate_4_label'] = '18%';
$_['kassa_tax_rate_5_label'] = 'Расчетная ставка 10/110';
$_['kassa_tax_rate_6_label'] = 'Расчетная ставка 18/118';
$_['kassa_tax_rate_table_caption'] = 'Сопоставьте ставки';
$_['kassa_shop_tax_rate_header'] = 'Ставка в вашем магазине';
$_['kassa_kassa_tax_rate_header'] = 'Ставка для чека в налоговую';

$_['kassa_notification_url_label'] = 'Адрес для уведомлений';
$_['kassa_notification_url_description'] = 'Этот адрес понадобится, только если его попросят специалисты Яндекс.Кассы';

$_['kassa_before_redirect_label'] = 'Когда пользователь переходит к оплате';
$_['kassa_create_order_label'] = 'Создать неоплаченный заказ в панели управления';
$_['kassa_clear_cart_label'] = 'Удалить товары из корзины';

$_['kassa_success_order_status_label'] = 'Статус заказа после оплаты';
$_['kassa_success_order_status_description'] = '';

$_['kassa_minimum_payment_amount_label'] = 'Минимальная сумма заказа';
$_['kassa_minimum_payment_amount_description'] = 'Сумма заказа при которой можно провести платёж с помощью Яндекс.Кассы';

$_['kassa_geo_zone_label'] = 'Регион отображения';
$_['kassa_geo_zone_description'] = 'Геозона в которой будет отображаться способ оплаты';
$_['kassa_any_geo_zone'] = 'Любая зона';

$_['kassa_debug_log_label'] = 'Debug log';
$_['kassa_debug_log_description'] = 'Подробное логгирование процесса проведения оплаты';
$_['kassa_debug_log_off'] = 'Выключить';
$_['kassa_debug_log_on'] = 'Включить';
$_['kassa_view_logs'] = 'Просмотр журнала сообщений';

$_['kassa_sort_order_label'] = 'Сортировка';
$_['kassa_sort_order_description'] = '';

$_['kassa_invoice_label'] = 'Выставление счетов по электронной почте';

$_['kassa_invoice_heading_label'] = 'Шаблон письма';
$_['kassa_invoice_subject_label'] = 'Тема';
$_['kassa_invoice_subject_default'] = 'Оплата заказа %order_id%';
$_['kassa_invoice_subject_description'] = 'Номер заказа (значение %order_id%) подставится автоматически';
$_['kassa_invoice_message_label'] = 'Дополнительный текст';
$_['kassa_invoice_message_description'] = 'Этот текст появится в письме после суммы и кнопки "Заплатить": напишите здесь важную для покупателя информацию или оставьте поле пустым';

$_['kassa_invoice_logo_label'] = 'Добавить к письму логотип магазина';

$_['kassa_invoices_kassa_disabled'] = 'Этот функционал доступен только для оплаты через Яндекс.Кассу';
$_['kassa_invoices_disabled'] = 'Этот функционал отключен в настройках модуля Яндекс.Кассы';
$_['kassa_invoices_invalid_order_id'] = 'Идентификатор заказа не был передан или не валиден';
$_['kassa_invoices_order_not_exists'] = 'Указанный заказ не найден';

$_['kassa_refund_status_pending_label'] = 'В ожидании';
$_['kassa_refund_status_succeeded_label'] = 'Проведён';
$_['kassa_refund_status_canceled_label'] = 'Отменён';

$_['kassa_breadcrumbs_payments'] = 'Список платежей через модуль Кассы';
$_['kassa_payments_page_title'] = 'Список платежей через модуль Кассы';
$_['kassa_payments_update_button'] = 'Обновить список';
$_['kassa_payments_capture_button'] = 'Провести все платежи';
$_['kassa_payment_list_label'] = 'Список платежей через модуль Кассы';
$_['kassa_payment_list_link'] = 'Открыть список';

$_['kassa_tab_header'] = 'Яндекс.Касса';
$_['wallet_tab_header'] = 'Яндекс.Деньги';
$_['billing_tab_header'] = 'Яндекс.Платёжка';
$_['metrika_tab_header'] = 'Яндекс.Метрика';
$_['market_tab_header'] = 'Яндекс.Маркет';

$_['kassa_payment_description_label'] = 'Transaction data';
$_['kassa_payment_description_description'] = 'Full description of the transaction that the user will see during the checkout process. You can find it in your Yandex.Checkout Merchant Profile. For example, "Payment for order No. 72 by user@yandex.ru".
Limitations: no more than 128 symbols';
$_['kassa_default_payment_description'] = 'Payment for order No. %order_id%';

$_['wallet_page_title'] = 'Настройки Яндекс.Денег';
$_['wallet_header_description'] = 'Для работы с модулем нужно открыть <a href=\'https://money.yandex.ru/new\' target=\'_blank\'>кошелек</a> на Яндексе.';
$_['wallet_version_string'] = 'Версия модуля';

$_['wallet_enable_label'] = 'Включить прием платежей в кошелек на Яндексе';
$_['wallet_account_id_label'] = 'Номер кошелька';
$_['wallet_account_id_description'] = '';
$_['wallet_account_id_error_required'] = 'Укажите номер кошелька';

$_['wallet_password_label'] = 'Секретное слово';
$_['wallet_password_description']    = 'Секретное слово нужно скопировать <a href=\'https://money.yandex.ru/myservices/online.xml\' target=\'_blank\'>со страницы настройки уведомлений</a> на сайте Яндекс.Денег';
$_['wallet_password_error_required'] = 'Укажите секретное слово';

$_['wallet_display_name_label'] = 'Название платежного сервиса';
$_['wallet_display_name_description'] = 'Это название увидит пользователь';
$_['wallet_default_display_name'] = 'Яндекс.Деньги (банковские карты, кошелек)';

$_['wallet_notification_url_label'] = 'RedirectURL';
$_['wallet_notification_url_description'] = 'Скопируйте эту ссылку в поле Redirect URI <a href=\'https://money.yandex.ru/myservices/online.xml\' target=\'_blank\'>со страницы настройки уведомлений</a> на сайте Яндекс.Денег';

$_['wallet_success_order_status_label'] = 'Статус заказа после оплаты';
$_['wallet_success_order_status_description'] = '';

$_['wallet_minimum_payment_amount_label'] = 'Минимальная сумма заказа';
$_['wallet_minimum_payment_amount_description'] = 'Сумма заказа при которой можно провести платёж';

$_['wallet_before_redirect_label'] = 'Когда пользователь переходит к оплате';
$_['wallet_create_order_label'] = 'Создать неоплаченный заказ в панели управления';
$_['wallet_clear_cart_label'] = 'Удалить товары из корзины';

$_['wallet_geo_zone_label'] = 'Регион отображения';
$_['wallet_geo_zone_description'] = 'Геозона в которой будет отображаться способ оплаты';
$_['wallet_any_geo_zone'] = 'Любая зона';

$_['wallet_sort_order_label'] = 'Сортировка';
$_['wallet_sort_order_description'] = '';

$_['billing_page_title'] = 'Настройки Яндекс.Платёжки';
$_['billing_header_description'] = '';
$_['billing_version_string'] = 'Версия модуля';

$_['billing_enable_label'] = 'Включить прием платежей через Яндекс.Платёжку';
$_['billing_form_id_label'] = 'ID формы';
$_['billing_form_id_description'] = '';
$_['billing_form_id_error_required'] = 'Укажите идентификатор формы';

$_['billing_purpose_label'] = 'Назначение платежа';
$_['billing_purpose_description'] = 'Назначение будет в платежном поручении: напишите в нем всё, что поможет отличить заказ, который оплатили через Платежку';
$_['billing_default_purpose'] = 'Номер заказа %order_id% Оплата через Яндекс.Платежку';

$_['billing_display_name_label'] = 'Название платежного сервиса';
$_['billing_display_name_description'] = 'Это название увидит пользователь';
$_['billing_default_display_name'] = 'Яндекс.Платежка (банковские карты, кошелек)';

$_['billing_success_order_status_label'] = 'Статус заказа';
$_['billing_success_order_status_description'] = 'Статус должен показать, что результат платежа неизвестен: заплатил клиент или нет, вы можете узнать только из уведомления на электронной почте или в своем банке';

$_['billing_minimum_payment_amount_label'] = 'Минимальная сумма заказа';
$_['billing_minimum_payment_amount_description'] = 'Сумма заказа при которой можно провести платёж с помощью Яндекс.Кассы';

$_['billing_geo_zone_label'] = 'Регион отображения';
$_['billing_geo_zone_description'] = 'Геозона в которой будет отображаться способ оплаты';
$_['billing_any_geo_zone'] = 'Любая зона';

$_['billing_sort_order_label'] = 'Сортировка';
$_['billing_sort_order_description'] = '';


// market_
$_['market_set']          = 'Upload setups';
$_['market_set_1']          = 'Upload products in stock only';
$_['market_set_3']          = 'Upload all options of the product (colors, sizes, etc.)';
$_['market_set_4']          = 'Upload all features of the product';
$_['market_set_5']          = 'View dimensions of the packed product';
$_['market_set_6']          = 'Upload all currencies (if not specified, only the default currency will be uploaded)';
$_['market_set_7']          = 'The product is available in retail store';
$_['market_set_8']          = 'Delivery option';
$_['market_set_9']          = 'Customer pickup available';
$_['market_lnk_yml']          = 'Link for uploading products to Yandex.Market';
$_['market_cat']          = 'Categories and products for upload';
$_['market_out']          = 'Upload';
$_['market_out_all']          = 'All products';
$_['market_out_sel']          = 'Selected categories';

$_['market_dostup']   = 'Доступность';
$_['market_dostup_1'] = 'Все доступны';
$_['market_dostup_2'] = 'Доступны если > 0, остальные на заказ';
$_['market_dostup_3'] = 'Если = 0, не выгружать';
$_['market_dostup_4'] = 'Все на заказ';

$_['market_s_name']          = 'Store name';
$_['market_d_cost']          = 'Price of delivery in home region';
$_['market_d_days']          = 'Term of delivery in home region';
$_['market_sv_all']          = 'Fold all';
$_['market_rv_all']          = 'Show all';
$_['market_ch_all']          = 'Cancel all';
$_['market_unch_all']          = 'Uncheck all boxes';
$_['market_sv']          = 'Save';
$_['market_gen']          = 'Generate';
$_['market_prostoy']          = 'Simplified YML';
$_['text_success']       = 'Settings saved';
$_['market_color_option'] = 'Color parameters';
$_['market_size_option']  = 'Size parameters';
$_['market_size_unit']      = '';

// metrika
$_['metrika_number']       = 'Counter number';
$_['metrika_pw']       = 'App password';
$_['metrika_idapp']       = 'ID of the app';
$_['metrika_set']       = 'Settings';
$_['metrika_set_1']       = 'Webvisor';
$_['metrika_set_2']       = 'Heatmap';
$_['metrika_set_5']       = 'Tracking hash in browser\'s URL bar';
$_['metrika_callback']       = 'Link for the app';

// Error
$_['error_permission']   = 'You do not have the right to manage the module!';
$_['active_on']          = 'Activated';
$_['active_off']          = 'Disabled';
$_['active']          = 'Activity';

//Updater
$_['updater_tab_header'] = 'Module update';
$_['updater_success_message'] = 'Module version %s successfully downloaded and installed';
$_['updater_error_unpack_failed'] = 'Unable to extract archive %s. More about the error in <a href="">module\'s logs</a>';
$_['updater_error_backup_create_failed'] = 'Unable to create a backup copy of the installed module version. More about the error in <a href="%s">module\'s logs</a>';
$_['updater_error_archive_load'] = 'Unable to load the latest module version archive. More about the error in <a href="%s">module\'s logs</a>';
$_['updater_restore_backup_message'] = 'Module version %s successfully restored from backup %s';
$_['updater_error_restore_backup'] = 'Unable to restore data from the backup. More about the error in <a href="%s">module\'s logs</a>';
$_['updater_backup_deleted_message'] = 'Backup %s successfully deleted';
$_['updater_error_delete_backup'] = 'Unable to delete backup %s. More about the error in the <a href="%s">module\'s logs</a>';
$_['updater_error_create_directory'] = 'Unable to create directory %s';
$_['updater_error_load'] = 'Unable to load the archive with the update';
$_['updater_header_text'] = 'New module versions with added features and fixed errors will appear here. Click the Update button to install the latest module version.';
$_['updater_about_title'] = 'About the module';
$_['updater_current_version'] = 'Current module version';
$_['updater_last_version'] = 'Latest available module version';
$_['updater_last_check_date'] = 'Date of the last check for updates';
$_['updater_check_updates'] = 'Check for updates';
$_['updater_history_title'] = 'Changelog:';
$_['updater_update'] = 'Update module';
$_['updater_error_load'] = 'Unable to load the archive with the update';
$_['updater_last_version_installed'] = 'You have the latest module version installed.';
$_['updater_backups_title'] = 'Backups';
$_['updater_module_version'] = 'Module version';
$_['updater_date_create'] = 'Creation date';
$_['updater_file_name'] = 'File name';
$_['updater_file_size'] = 'File size';
$_['updater_restore'] = 'Restore';
$_['updater_delete'] = 'Delete';
$_['updater_delete_message'] = 'Do you really want to delete the backup copy of this module version ';
$_['updater_restore_message'] = 'Do you really want to restore the module from the backup copy of this version';
$_['text_repay'] = 'Pay';
$_['text_payment_on_hold']            = 'Payment on hold';


//Подтверждение платежа
$_['kassa_hold_setting_label']         = 'Включить отложенную оплату';
$_['kassa_hold_setting_description']   = 'Если опция включена, платежи с карт проходят в 2 этапа: у клиента сумма замораживается, и вам вручную нужно подтвердить её списание – через панель администратора';
$_['kassa_statuses_description_label'] = 'Какой статус присваивать заказу, если он:';
$_['kassa_hold_order_status_label']    = 'ожидает подтверждения';
$_['kassa_cancel_order_status_label']  = 'отменён';

$_['captures_title']                  = 'Подтверждение платежа';
$_['captures_expires_date']           = 'Подтвердить до';
$_['captures_new']                    = 'Подтверждение платежа';
$_['captures_payment_data']           = 'Данные платежа';
$_['captures_payment_id']             = 'Номер транзакции в Яндекс.Кассе';
$_['captures_order_id']               = 'Номер заказа';
$_['captures_payment_method']         = 'Способ оплаты';
$_['captures_payment_sum']            = 'Сумма платежа';
$_['captures_capture_data']           = '';
$_['captures_capture_sum']            = 'Сумма подтверждения';
$_['captures_capture_create']         = 'Подтвердить платеж';
$_['cancel_payment_button']           = 'Отменить платеж';
$_['capture_payment_success_message'] = 'Платеж подтвержден успешно';
$_['capture_payment_fail_message']    = 'Ошибка подтверждения платежа';
$_['cancel_payment_success_message']  = 'Платеж отменен успешно';
$_['cancel_payment_fail_message']     = 'Ошибка отмены платежа';

$_['column_product']  = 'Наименование товара';
$_['column_quantity'] = 'Количество товара';
$_['column_price']    = 'Цена товара';
$_['column_total']    = 'Итого';