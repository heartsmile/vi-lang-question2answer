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
		'a_commented_body' => "Câu trả lời của bạn ^site_title đã được bình luận bởi ^c_handle:\n\n^open^c_content^close\n\nCâu trả lời của bạn là:\n\n^open^c_context^close\n\nBạn có thể trả lời bằng cách thêm bình luận tại đây:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'a_commented_subject' => 'Đã có 1 bình luận mới về câu hỏi của bạn trên ^site_title',

		'a_followed_body' => "Câu trả lời của bạn trên ^site_title có một câu hỏi liên quan mới trên ^q_handle:\n\n^open^q_title^close\n\nCâu trả lời của bạn là:\n\n^open^a_content^close\n\nBấm vào dưới đây để trả lời các câu hỏi mới này:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'a_followed_subject' => 'Có 1 câu hỏi liên quan đến câu trả lời của bạn trên ^site_title',

		'a_selected_body' => "Xin chúc mừng! Câu trả lời của bạn trên ^site_title đã được bình chọn là tốt nhất bởi ^s_handle:\n\n^open^a_content^close\n\nCâu hỏi là:\n\n^open^q_title^close\n\nBấm vào dưới đây để xem câu trả lời của bạn:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'a_selected_subject' => 'Câu trả lời trên ^site_title của bạn đã được bình chọn là hay nhất!',

		'c_commented_body' => "Một bình luận mới bởi ^c_handle đã được thêm vào sau khi bình luận của bạn trên ^site_title:\n\n^open^c_content^close\n\nCác cuộc thảo luận đang được theo dõi:\n\n^open^c_context^close\n\nBạn có thể trả lời bằng cách thêm một bình luận khác tại đây:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'c_commented_subject' => 'Một bình luận vừa được thêm vào sau bình luận của bạn trên ^site_title',

		'confirm_body' => "Xin vui lòng bấm vào đường dẫn dưới đây để xác nhận địa chỉ thư điện tử của bạn tại ^site_title.\n\n^url\n\nCảm ơn,\n^site_title",
		'confirm_subject' => '^site_title - Xác nhận địa chỉ thư điện tử.',

		'feedback_body' => "Bình luận:\n^message\n\nName:\n^name\n\nEmail:\n^email\n\nPrevious page:\n^previous\n\nUser:\n^url\n\nIP address:\n^ip\n\nBrowser:\n^browser",
		'feedback_subject' => '^ Ý kiến phản hồi từ.',

		'flagged_body' => "Một bài đăng của ^p_handle đã nhận được ^flags:\n\n^open^p_context^close\n\nBấm vào link dưới đây để xem bài đăng này:\n\n^url\n\n\nBấm vào dưới đây để xem tất cả bài viết được đánh dấu:\n\n^a_url\n\n\nCảm ơn bạn,\n\n^site_title",
		'flagged_subject' => 'Có 1 báo cáo vi phạm từ ^site_title',

		'moderate_body' => "Một bài đăng của ^p_handle yêu cầu bạn chấp nhận:\n\n^open^p_context^close\n\nBấm vào link dưới đây để chấp nhận hoặc từ chối các bài đăng:\n\n^url\n\n\nBấm vào dưới đây để xem tất cả bài đăng đang đợi:\n\n^a_url\n\n\nCảm ơn bạn,\n\n^site_title",
		'moderate_subject' => 'Duyệt bài viết từ ^site_title',

		'new_password_body' => "Mật khẩu mới của bạn tại ^site_title.\n\nPassword: ^password\n\nBạn nên thay đổi mật khẩu này ngay sau khi đăng nhập.\n\nCảm ơn bạn,\n^site_title\n^url",
		'new_password_subject' => '^site_title - Mật khẩu mới của bạn.',

		'private_message_body' => "Bạn đã nhận một tin nhắn cá nhân từ ^f_handle trên ^site_title:\n\n^open^message^close\n\n^moreCảm ơn bạn,\n\n^site_title\n\n\nĐể chặn tin nhắn , hãy truy cập vào đây để cài đặt:\n^a_url",
		'private_message_info' => "Xem thông tin thêm về ^f_handle tại đây:\n\n^url\n\n",
		'private_message_reply' => "Bấm vào đường đãn dưới đây để trả lời tin nhắn của ^f_handle:\n\n^url\n\n",
		'private_message_subject' => 'Có tin nhắn từ ^f_handle trên ^site_title',

		'q_answered_body' => "Câu hỏi của bạn trên ^site_title đã được trả lời bởi ^a_handle:\n\n^open^a_content^close\n\nCâu hỏi của bạn là:\n\n^open^q_title^close\n\nNếu bạn thích câu trả lời này , bạn có thể bình chọn nó là câu trả lời hay nhất tại đây:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'q_answered_subject' => 'Câu hỏi trên ^site_title của bạn đã được trả lời',

		'q_commented_body' => "Câu hỏi của bạn trên ^site_title có bình luận mới bởi ^c_handle:\n\n^open^c_content^close\n\nCâu hỏi của bạn là:\n\n^open^c_context^close\n\nBạn có thể trả lời bằng cách thêm nhận xét của mình tại đây:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'q_commented_subject' => 'Câu hỏi trên ^site_title của bạn đã có bình luận mới',

		'q_posted_body' => "Một câu hỏi mới đã được yêu cầu bởi ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nBấm vào đường dẫn dưới đây để xem các câu hỏi:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'q_posted_subject' => 'Có một câu hỏi mới từ ^site_title',
		
		'remoderate_body' => "Một bài viết bởi ^p_handle cần bạn xem qua:\n\n^open^p_context^close\n\nBấm vào đường dẫn dưới đây để phê duyệt hoặc ẩn bài viết:\n\n^url\n\n\nBấm vào đường link dưới đây để xem câu hỏi:\n\n^a_url\n\n\nCảm ơn bạn,\n\n^site_title",
		'remoderate_subject' => 'Duyệt bài viết từ ^site_title',

		'reset_body' => "Vui lòng bấm vào dưới đây để khôi phục lại mật khẩu của bạn tại ^site_title.\n\n^url\n\nNgoài ra, nhập mã dưới đây vào ô trống.\n\nCode: ^code\n\nNếu bạn không yêu cầu khôi phục lại mật khẩu, xin vui lòng bỏ qua thư này.\n\nCảm ơn bạn,\n^site_title",
		'reset_subject' => '^site_title - Khôi phục lại mật khẩu bị mất.',

		'to_handle_prefix' => "^,\n\n",
		
		'u_registered_body' => "Một tài khoản mới ^u_handle đã đăng ký.\n\nBấm vào đường dẫn dưới đây để xem hồ sơ người dùng:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'u_to_approve_body' => "Một tài khoản mới ^u_handle đã đăng ký.\n\nBấm vào đường dẫn dưới đây để chấp nhận người sử dụng:\n\n^url\n\nBấm vào đường dẫn dưới đây để xem tất cả tài khoản mới đang chờ phê duyệt:\n\n^a_url\n\nCảm ơn bạn,\n\n^site_title",
		'u_registered_subject' => 'Có tài khoản mới đăng ký trên ^site_title',
		
		'u_approved_body' => "Bạn có thể xem hồ sơ tài khoản mới ở đây:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",
		'u_approved_subject' => 'Tài khoản mới trên ^site_title đã được chấp nhận',
		
		'wall_post_subject' => 'Có bài đăng trên tường của bạn tại ^site_title',
		'wall_post_body' => "^f_handle đã đăng trên tường của bạn tại ^site_title:\n\n^open^post^close\n\nBạn có thể trả lời cho bài viết ở đây:\n\n^url\n\nCảm ơn bạn,\n\n^site_title",

		'welcome_body' => "Cảm ơn bạn đã đăng ký tài khoản tại ^site_title.\n\n^custom^confirmDưới đây là thông tin đăng nhập chi tiết của bạn:\n\nUsername: ^handle\nEmail: ^email\n\nHãy giữ những thông tin này an toàn để có thể dùng đến trong tương lai.\n\nCảm ơn bạn,\n\n^site_title\n^url",
		'welcome_confirm' => "Vui lòng bấm vào đường dẫn dưới đây để xác nhận địa chỉ thư điện tử của bạn.\n\n^url\n\n",
		'welcome_subject' => 'Chào mừng bạn đến với ^site_title!',

	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/