<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Text;

class TextTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		    $user = User::first();

        $text = new Text();
        $text->title = 'Creating authorization and authentication systems';
        $text->description = 'Every web app owner needs to make sure that users are who they claim to be and therefore prevent unauthorized users to access the secured resources. Laravel makes authentication implementation very straightforward. Nearly everything is configured out-of-the-box. The framework also provides a simple way of organizing authorization logic as well as control resources access.';
        $text->publication_date = Carbon\Carbon::now();
        $text->user_id = $user->id;
        $text->save();

        $text = new Text();
        $text->title = 'Integration with tools to make faster web apps';
        $text->description = 'It is necessary not only to build an app but to create a fast one as well, which would result to revenue acceleration. Integration with caching back end often is one of the major steps taken to boost the performance of a web app. Laravel supports popular cache back-ends, such as Redis and Memcached out-of-the-box. Through default, the framework is configured to use file cache driver that stores cached objects in a file systems. It is even possible to configure numerous cache configurations.';
        $text->publication_date = Carbon\Carbon::now();
        $text->user_id = $user->id;
        $text->save();

        $text = new Text();
        $text->title = 'Mail services integration';
        $text->description = 'Mail service could be used for sending notifications to emails of users after different events. It is difficult to imagine a modern web app, for instance which lack even a simple email notification to a new user regarding their successful registration on a site. The framework offers a simple, clean API over the famous SwiftMailer library. It also provides drivers for Mailgun, SMTP, Mandrill, Amazon SES and more, enabling an app to quickly begin sending email via a local or cloud-based service. It provides support for sending notifications across various delivery channels, such as SMS and Slack.';
        $text->publication_date = Carbon\Carbon::now();
        $text->user_id = $user->id;
        $text->save();
    }
}
