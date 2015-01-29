<?php
	
/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-include/qa-lang-emails.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "Câu trả lời của bạn trên ^site_title có 1 bình luận mới bởi ^c_handle:\n\n^open^c_content^close\n\nCâu trả lời của bạn là:\n\n^open^c_context^close\n\nBạn có thể hồi âm bằng cách thêm bình luận của bạn tại đây:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'a_commented_subject' => 'Có 1 bình luận mới về câu trả lời của bạn trên ^site_title',

		'a_followed_body' => "Câu trả lời của bạn trên ^site_title có 1 câu hỏi liên quan bởi ^q_handle:\n\n^open^q_title^close\n\nCâu trả lời của bạn là:\n\n^open^a_content^close\n\nBấm vào đường link dưới đây để trả lời câu hỏi mới này:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'a_followed_subject' => 'Có 1 câu hỏi liên quan đến câu trả lời của bạn trên ^site_title',

		'a_selected_body' => "Xin chúc mừng! Câu trả lời của bạn trên ^site_title đã được bầu chọn là hay nhất bởi ^s_handle:\n\n^open^a_content^close\n\nCâu hỏi là:\n\n^open^q_title^close\n\nBấm vào đường link dưới đây để xem câu trả lời của bạn:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'a_selected_subject' => 'Câu trả lời của bạn đã được bầu chọn là hay nhất trên ^site_title !',

		'c_commented_body' => "Một bình luận mới bởi ^c_handle đã được thêm vào sau bình luận của bạn trên ^site_title:\n\n^open^c_content^close\n\nCuộc thảo luận đang theo dõi:\n\n^open^c_context^close\n\nBạn có thể hồi âm bằng cách thêm 1 bình luận khác tại đây:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'c_commented_subject' => 'Một bình luận vừa được thêm vào sau bình luận của bạn trên ^site_title',

		'confirm_body' => "Xin vui lòng bấm vào đường link dưới đây để xác nhận địa chỉ Email của bạn tại ^site_title.\n\n^url\n\nCảm ơn bạn,\n^site_title",
		'confirm_subject' => 'Xác nhận địa chỉ Email - ^site_title',

		'feedback_body' => "Ý kiến phản hồi:\n^message\n\nTên:\n^name\n\nEmail:\n^email\n\nTrang trước đó:\n^previous\n\nThành viên:\n^url\n\nĐịa chỉ IP:\n^ip\n\nTrình duyệt:\n^browser",
		'feedback_subject' => 'Ý kiến phản hồi từ ^',

		'flagged_body' => "Một bài viết của ^p_handle đã nhận được ^flags:\n\n^open^p_context^close\n\nBấm vào link dưới đây để xem bài viết này:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'flagged_subject' => 'Có 1 báo cáo vi phạm từ ^site_title',

		'moderate_body' => "Một bài viết của ^p_handle yêu cầu sự chấp thuận của bạn:\n\n^open^p_context^close\n\nBấm vào link dưới đây để chấp thuận hoặc từ chối bài viết này:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'moderate_subject' => 'Duyệt bài viết từ ^site_title',

		'new_password_body' => "Mật khẩu mới của bạn tại ^site_title:\n\nMật khẩu: ^password\n\nChúng tôi khuyến cáo bạn nên đổi mật khẩu này ngay lập tức sau khi đăng nhập.\n\nCảm ơn bạn,\n^site_title\n^url",
		'new_password_subject' => 'Mật khẩu mới của bạn tại ^site_title',

		'private_message_body' => "Bạn đã nhận được 1 tin nhắn cá nhân từ ^f_handle trên ^site_title:\n\n^open^message^close\n\n^moreCảm ơn bạn,\n\n^site_title\n\n\nĐể khóa chức năng nhắn tin cá nhân, bạn hãy vào đây để cài đặt:\n^a_url",
		'private_message_info' => "Xem thêm thông tin về ^f_handle tại đây:\n\n^url\n\n",
		'private_message_reply' => "Bấm vào link dưới đây để hồi âm tới ^f_handle:\n\n^url\n\n",
		'private_message_subject' => 'Tin nhắn từ ^f_handle trên ^site_title',

		'q_answered_body' => "Câu hỏi của bạn trên ^site_title đã được trả lời bởi ^a_handle:\n\n^open^a_content^close\n\nCâu hỏi của bạn là:\n\n^open^q_title^close\n\nNếu bạn thích câu trả lời này, bạn có thể bầu chọn nó là câu trả lời hay nhất tại đây:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'q_answered_subject' => 'Câu hỏi của bạn đã được trả lời trên ^site_title',

		'q_commented_body' => "Câu hỏi của bạn trên ^site_title có 1 bình luận mới của ^c_handle:\n\n^open^c_content^close\n\nCâu hỏi của bạn là:\n\n^open^c_context^close\n\nBạn có thể hồi âm bằng cách thêm bình luận của bạn tại đây:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'q_commented_subject' => 'Có 1 bình luận mới về câu hỏi của bạn trên ^site_title',

		'q_posted_body' => "Một câu hỏi mới của ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nBấm vào đường link dưới đây để xem câu hỏi:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'q_posted_subject' => 'Có 1 câu hỏi mới từ ^site_title',

		'reset_body' => "Xin vui lòng bấm vào link dưới đây để khôi phục lại mật khẩu của bạn tại ^site_title.\n\n^url\n\nNgoài ra, bạn có thể điền mã dưới đây vào trong ô trống.\n\nMã: ^code\n\nNếu bạn không yêu cầu khôi phục lại mật khẩu, xin vui lòng bỏ qua tin nhắn này.\n\nCảm ơn bạn,\n^site_title",
		'reset_subject' => 'Khôi phục lại mật khẩu đã quên tại ^site_title',

		'to_handle_prefix' => "^,\n\n",

		'welcome_body' => "Cảm ơn bạn đã đăng ký tài khoản tại ^site_title.\n\n^custom^confirmDưới đây là thông tin đăng nhập của bạn:\n\nEmail: ^email\nMật khẩu: ^password\n\nXin vui lòng giữ thông tin này an toàn để có thể tham khảo trong tương lai.\n\nCảm ơn bạn,\n\n^site_title\n^url",
		'welcome_confirm' => "Xin vui lòng bấm vào đường link dưới đây để xác nhận địa chỉ Email của bạn:\n\n^url\n\n",
		'welcome_subject' => 'Chào mừng bạn đến với ^site_title!',
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/