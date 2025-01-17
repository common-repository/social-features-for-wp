<?php
defined("SOCIAL_MONSTER_ON") || die("Error occured.");
final class social_monster_lang_data
{
	private static $data	=	array(
		SOCIAL_MONSTER_LANG_STATE=>"Состояние",
		SOCIAL_MONSTER_LANG_BSV=>"Сохранить",
		SOCIAL_MONSTER_LANG_BSN=>"Отправить",
		SOCIAL_MONSTER_LANG_RSVD=>"Сохранено",
		SOCIAL_MONSTER_LANG_RSNT=>"Отправлено",
		SOCIAL_MONSTER_LANG_RERR=>"Ошибка",
		SOCIAL_MONSTER_LANG_MSHR=>"Поделиться",
		SOCIAL_MONSTER_LANG_MHLP=>"Помощь",
		SOCIAL_MONSTER_LANG_MDON=>"Поддержать",
		SOCIAL_MONSTER_LANG_MDIS=>"Отключено",
		SOCIAL_MONSTER_LANG_MDIS2=>"отключено",
		SOCIAL_MONSTER_LANG_MENA=>"Включено",
		SOCIAL_MONSTER_LANG_MENA2=>"включено",
		SOCIAL_MONSTER_LANG_TPOS=>"Размещение",
		SOCIAL_MONSTER_LANG_STM1=>"Сначала вы должны получить код вставки на сайте \"ShareThis\"",
		SOCIAL_MONSTER_LANG_STM2=>"Перейдите по ссылке, чтобы выполнить все необходимые шаги\"",
		SOCIAL_MONSTER_LANG_STM3=>"Подсказка №",
		SOCIAL_MONSTER_LANG_STM4=>"на 1-м шаге выберите платформу \"Website\"",
		SOCIAL_MONSTER_LANG_STM5=>"на 2-м шаге выберите \"кнопочный\"(\"Button\") вид виджета",
		SOCIAL_MONSTER_LANG_STM6=>"на 3-м шаге установите размер иконки 32x32(\"Large(32x32) Chicklet Size\")",
		SOCIAL_MONSTER_LANG_STM7=>"не закрывайте сайт \"ShareThis\" с результатом всех шагов, пока не сохраните все данные здесь",
		SOCIAL_MONSTER_LANG_STM8=>"Вставьте HTML код из секции 1",
		SOCIAL_MONSTER_LANG_STM9=>"наведите, чтобы посмотреть скриншот",
		SOCIAL_MONSTER_LANG_STM10=>"Вставьте значение \"publisher\" из кода секции 2",
		SOCIAL_MONSTER_LANG_NSHR=>"Если вы выбрали состояние \"отключено\", то измененные данные <b>не</b> будут сохранены/обновлены!",
		SOCIAL_MONSTER_LANG_FBL=>"светлая",
		SOCIAL_MONSTER_LANG_FBD=>"темная",
		SOCIAL_MONSTER_LANG_BLDISP=>"Оформление блока",
		SOCIAL_MONSTER_LANG_BLDISP1=>"без свертывания",
		SOCIAL_MONSTER_LANG_BLDISP2=>"свертываемый",
		SOCIAL_MONSTER_LANG_BLDISP3=>"свернутый вначале",
		SOCIAL_MONSTER_LANG_VKAT_GRAFF=>"граффити",
		SOCIAL_MONSTER_LANG_VKAT_PHOTO=>"фото",
		SOCIAL_MONSTER_LANG_VKAT_AUDIO=>"аудио",
		SOCIAL_MONSTER_LANG_VKAT_VIDEO=>"видео",
		SOCIAL_MONSTER_LANG_VKAT_LINK=>"ссылки",
		SOCIAL_MONSTER_LANG_SUP_STR1=>"Если у вас имеются какие-либо вопросы, замечания по работе плагина или вы нашли ошибку, напишите мне сообщение, используя форму ниже",
		SOCIAL_MONSTER_LANG_SUP_STR2=>"Я постараюсь вам ответить как можно быстрее",
		SOCIAL_MONSTER_LANG_SUP_STR3=>"обязательно для заполнения только поле \"Полное описание\"",
		SOCIAL_MONSTER_LANG_DON_STR1=>"Пожалуйста, сохраните информацию об авторстве в заголовках файлов.<br /> Вы можете модифицировать данный плагин и использовать его в любых целях совершенно бесплатно",
		SOCIAL_MONSTER_LANG_DON_STR2=>"Но, если вам нравится этот плагин и вы хотите помочь мне в его усовершенствовании, а также в<br /> разработке других плагинов, то вспользуйтесь реквизитами, указанными ниже",
		/*----- quote " as \\\" in SOCIAL_MONSTER_LANG_SL... messages to be used in json -----*/
		SOCIAL_MONSTER_LANG_SLFB_STR1=>"FB AppID не может быть пустым. Это значение можно узнать на странице настроек вашего FB приложения.",
		SOCIAL_MONSTER_LANG_SLFB_STR2=>"FB AppID должно состоять только из цифр.",
		SOCIAL_MONSTER_LANG_SLFB_STR3=>"Ссылка на FB Javascript SDK не может быть пустой.",
		SOCIAL_MONSTER_LANG_SLFB_STR4=>"Ссылка на FB Javascript SDK некорректна или уже устарела.",
		SOCIAL_MONSTER_LANG_SLFB_STR5=>"Укажите ширину виджета.",
		SOCIAL_MONSTER_LANG_SLFB_STR6=>"Значение ширины виджета должно состоять только из цифр.",
		SOCIAL_MONSTER_LANG_SLFB_STR7=>"Укажите начальное количество отображаемых сообщений.",
		SOCIAL_MONSTER_LANG_SLFB_STR8=>"Значение начального количества отображаемых сообщений должно состоять только из цифр.",
		SOCIAL_MONSTER_LANG_SLGEN_STR1=>"Значение \\\"Интервал очистки кэша\\\" должно быть целым числом.",
		SOCIAL_MONSTER_LANG_SLSHARE_STR1=>"Выберите хотя бы одну социальную кнопку.",
		SOCIAL_MONSTER_LANG_SLSHARE_STR2=>"Поле ShareThis HTML обязательно для заплнения.",
		SOCIAL_MONSTER_LANG_SLSHARE_STR3=>"Поле Publisher обязательно для заполнения.",
		SOCIAL_MONSTER_LANG_SLVK_STR1=>"VK ApiID не может быть пустым. Это значение можно узнать на странице настроек вашего VK приложения.",
		SOCIAL_MONSTER_LANG_SLVK_STR2=>"VK ApiID должно состоять только из цифр.",
		SOCIAL_MONSTER_LANG_SLVK_STR3=>"Ссылка на VK Javascript SDK не может быть пустой.",
		SOCIAL_MONSTER_LANG_SLVK_STR4=>"Ссылка на VK Javascript SDK некорректна или уже устарела.",
		SOCIAL_MONSTER_LANG_SLVK_STR5=>"Укажите ширину виджета.",
		SOCIAL_MONSTER_LANG_SLVK_STR6=>"Значение ширины виджета должно состоять только из цифр.",
		SOCIAL_MONSTER_LANG_SLVK_STR7=>"Укажите высоту виджета.",
		SOCIAL_MONSTER_LANG_SLVK_STR8=>"Значение высоты виджета должно состоять только из цифр.",
		SOCIAL_MONSTER_LANG_SLVK_STR9=>"Укажите начальное количество отображаемых сообщений.",
		SOCIAL_MONSTER_LANG_SLVK_STR10=>"Значение начального количества отображаемых сообщений должно состоять только из цифр.",
		SOCIAL_MONSTER_LANG_SLVK_STR11=>"Укажите значение VK Element ID.",
		"Attachment types"=>"Типы вложений",
		"Cache re-check interval, sec."=>"Интервал очистки кэша, сек.",
		"Color Scheme"=>"Цветовая схема",
		"Common settings"=>"Общие настройки",
		"Comments order"=>"Очередность комментариев",
		"Detailed settings"=>"Расширенные настройки",
		"E-mail for answer"=>"E-mail для ответа",
		"Full description"=>"Полное описание",
		"Initial posts count"=>"Начальное кол-во комментариев",
		"Injected SDK script"=>"Подключаемый SDK скрипт",
		"Plugin update"=>"Обновление плагина",
		"Real-time updates"=>"Обновления в реальном времени",
		"Select share buttons by clicking"=>"Выберите социальные кнопки",
		"Select the type of a message"=>"Выбранные тему сообщения",
		"Selected share buttons"=>"Выбранные социальные кнопки",
		"Select \"Отправить\" option and enter this e-mail"=>"Выберите опцию \"Отправить\" и укажите данный e-mail",
		"ShareThis js-plugin"=>"js-плагин ShareThis",
		"Short description/title"=>"Краткое описание/заголовок",
		"Social Monster Options"=>"Настройки Social Monster",
		"Social Monster tool"=>"встроенные кнопки",
		"Sort order"=>"Порядок сортировки",
		"Template"=>"Шаблон",
		"Target account"=>"Получатель",
		"Target wallet"=>"Номер кошелька",
		"VKontakte"=>"ВКонтакте",
		"Widget width"=>"Ширина виджета",
		"Widget height"=>"Высота виджета",
		"Widget container id"=>"Id контейнера виджета",
		"Will be implemented in further releases"=>"Будет реализовано в следующих версиях",
		"allow all"=>"разрешить все",
		"bottom left"=>"снизу слева",
		"bottom center"=>"снизу по центру",
		"bottom right"=>"снизу справа",
		"by popularity"=>"по популярности",
		"by time (reversed)"=>"сначала новые",
		"by time"=>"сначала старые",
		"bug report"=>"сообщение об ошибке",
		"just a question"=>"просто вопрос",
		"improvement proposal"=>"предложение по доработке",
		"select below"=>"отметьте ниже",
		"navigate to PayPal transfer page"=>"перейти на страницу переводов PayPal",
		"navigate to Yandex Money transfer page"=>"перейти на страницу переводов Яндекс.Деньги",
		"navigate to Qiwi Wallet transfer page"=>"перейти на страницу переводов Qiwi Wallet",
		"top left"=>"сверху слева",
		"top center"=>"сверху по центру",
		"top right"=>"сверху справа",
		"use 0 (zero) to set to auto"=>"0 (ноль) для автоопределения",
	);

	public static function getData()
	{
		return self::$data;
	}
}
?>
