<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Confirmation - Exodus Trails</title>
  <style>
    /* Some email clients will use these styles */
    @media only screen and (max-width: 600px) {
      .container {
        width: 100% !important;
      }
      .content {
        padding: 15px !important;
      }
      .header-image {
        height: 120px !important;
      }
      .trek-image {
        height: 150px !important;
      }
    }
  </style>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f5f5f5; color: #333333;">
  <!-- Main Container -->
  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #f5f5f5; padding: 20px;">
    <tr>
      <td align="center">
        <!-- Email Container -->
        <table class="container" border="0" cellpadding="0" cellspacing="0" width="600" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.05);">
          <!-- Header -->
          <tr>
            <td>
              <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td>
                    <div class="header-image" style="background-image: url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b'); background-size: cover; background-position: center; height: 180px; position: relative;">
                      <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(rgba(30, 64, 18, 0.7), rgba(30, 64, 18, 0.9)); display: flex; align-items: center; justify-content: center;">
                        <h1 style="color: #ffffff; margin: 0; padding: 20px; text-align: center; font-size: 28px; text-shadow: 1px 1px 3px rgba(0,0,0,0.3);">Booking Confirmation</h1>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Logo and Brand -->
          <tr>
            <td align="center" style="padding: 20px 0; background-color: #2c5e1a;">
              <img src="https://via.placeholder.com/180x60/2c5e1a/ffffff?text=EXODUS+TRAILS" alt="Exodus Trails" style="display: block; height: 60px;">
            </td>
          </tr>

          <!-- Content -->
          <tr>
            <td class="content" style="padding: 30px;">
              <!-- Greeting -->
              <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td>
                    <h2 style="color: #2c5e1a; margin-top: 0;">Thank you for your booking!</h2>
                    <p style="line-height: 1.6; color: #555555;">Dear <span style="font-weight: bold;">{Customer Name}</span>,</p>
                    <p style="line-height: 1.6; color: #555555;">Your trek booking has been confirmed. We're excited to guide you through the beautiful trails of the Himalayas. Below are your booking details:</p>
                  </td>
                </tr>
              </table>

              <!-- Divider -->
              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 20px 0;">
                <tr>
                  <td>
                    <div style="height: 1px; background-color: #e0e0e0;"></div>
                  </td>
                </tr>
              </table>

              <!-- Booking Details -->
              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #f9f9f9; border-radius: 8px; overflow: hidden;">
                <tr>
                  <td style="padding: 20px;">
                    <h3 style="color: #2c5e1a; margin-top: 0;">Booking Details</h3>

                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                      <tr>
                        <td width="40%" style="padding: 8px 0; color: #666666; font-weight: bold;">Booking Reference:</td>
                        <td width="60%" style="padding: 8px 0; color: #333333;">{Booking ID}</td>
                      </tr>
                      <tr>
                        <td width="40%" style="padding: 8px 0; color: #666666; font-weight: bold;">Trek Name:</td>
                        <td width="60%" style="padding: 8px 0; color: #333333;">{Trek Name}</td>
                      </tr>
                      <tr>
                        <td width="40%" style="padding: 8px 0; color: #666666; font-weight: bold;">Trek Date:</td>
                        <td width="60%" style="padding: 8px 0; color: #333333;">{Trek Date}</td>
                      </tr>
                      <tr>
                        <td width="40%" style="padding: 8px 0; color: #666666; font-weight: bold;">Duration:</td>
                        <td width="60%" style="padding: 8px 0; color: #333333;">{Duration} days</td>
                      </tr>
                      <tr>
                        <td width="40%" style="padding: 8px 0; color: #666666; font-weight: bold;">Group Size:</td>
                        <td width="60%" style="padding: 8px 0; color: #333333;">{Group Size} people</td>
                      </tr>
                      <tr>
                        <td width="40%" style="padding: 8px 0; color: #666666; font-weight: bold;">Total Amount:</td>
                        <td width="60%" style="padding: 8px 0; color: #333333; font-weight: bold;">₹{Total Amount}</td>
                      </tr>
                      <tr>
                        <td width="40%" style="padding: 8px 0; color: #666666; font-weight: bold;">Payment Status:</td>
                        <td width="60%" style="padding: 8px 0; color: #e67e22; font-weight: bold;">{Payment Status}</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- Trek Image -->
              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 20px 0;">
                <tr>
                  <td>
                    <div class="trek-image" style="background-image: url('https://images.unsplash.com/photo-1526772662000-3f88f10405ff'); background-size: cover; background-position: center; height: 200px; border-radius: 8px; overflow: hidden;"></div>
                  </td>
                </tr>
              </table>

              <!-- Next Steps -->
              <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td>
                    <h3 style="color: #2c5e1a;">Next Steps</h3>
                    <ol style="padding-left: 20px; line-height: 1.6; color: #555555;">
                      <li><strong>Prepare your gear</strong> - Check our <a href="#" style="color: #e67e22; text-decoration: none;">recommended packing list</a></li>
                      <li><strong>Complete your medical form</strong> - Please fill out the <a href="#" style="color: #e67e22; text-decoration: none;">medical information form</a></li>
                      <li><strong>Join the pre-trek briefing</strong> - We'll send you details for an online briefing session</li>
                      <li><strong>Arrival details</strong> - Please confirm your arrival time and location</li>
                    </ol>
                  </td>
                </tr>
              </table>

              <!-- Divider -->
              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 20px 0;">
                <tr>
                  <td>
                    <div style="height: 1px; background-color: #e0e0e0;"></div>
                  </td>
                </tr>
              </table>

              <!-- CTA Button -->
              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 20px 0;">
                <tr>
                  <td align="center">
                    <a href="#" style="display: inline-block; padding: 12px 24px; background-color: #e67e22; color: #ffffff; text-decoration: none; font-weight: bold; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">View Booking Details</a>
                  </td>
                </tr>
              </table>

              <!-- Contact Info -->
              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 20px 0; background-color: #f9f9f9; border-radius: 8px;">
                <tr>
                  <td style="padding: 15px;">
                    <h4 style="color: #2c5e1a; margin-top: 0;">Need assistance?</h4>
                    <p style="line-height: 1.6; color: #555555; margin-bottom: 5px;">
                      <strong>Email:</strong> <a href="mailto:support@exodustrails.com" style="color: #e67e22; text-decoration: none;">support@exodustrails.com</a>
                    </p>
                    <p style="line-height: 1.6; color: #555555; margin-bottom: 5px;">
                      <strong>Phone:</strong> <a href="tel:+919876543210" style="color: #e67e22; text-decoration: none;">+91 98765 43210</a>
                    </p>
                    <p style="line-height: 1.6; color: #555555; margin-bottom: 0;">
                      <strong>WhatsApp:</strong> <a href="https://wa.me/919876543210" style="color: #e67e22; text-decoration: none;">+91 98765 43210</a>
                    </p>
                  </td>
                </tr>
              </table>

              <!-- Cancellation Policy -->
              <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td>
                    <p style="font-size: 13px; color: #777777; line-height: 1.5;">
                      <strong>Cancellation Policy:</strong> Free cancellation up to 30 days before the trek date. 50% refund for cancellations between 15-30 days. No refund for cancellations less than 15 days before the trek.
                    </p>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="background-color: #2c5e1a; padding: 20px; text-align: center;">
              <p style="margin: 0 0 10px 0; color: #ffffff; font-size: 14px;">
                Follow us for updates and trek inspiration
              </p>

              <!-- Social Icons -->
              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 240px; margin: 0 auto;">
                <tr>
                  <td align="center" width="60">
                    <a href="#" style="display: inline-block; width: 36px; height: 36px; background-color: #ffffff; border-radius: 50%; line-height: 36px; text-align: center; color: #2c5e1a; font-weight: bold; text-decoration: none;">FB</a>
                  </td>
                  <td align="center" width="60">
                    <a href="#" style="display: inline-block; width: 36px; height: 36px; background-color: #ffffff; border-radius: 50%; line-height: 36px; text-align: center; color: #2c5e1a; font-weight: bold; text-decoration: none;">IG</a>
                  </td>
                  <td align="center" width="60">
                    <a href="#" style="display: inline-block; width: 36px; height: 36px; background-color: #ffffff; border-radius: 50%; line-height: 36px; text-align: center; color: #2c5e1a; font-weight: bold; text-decoration: none;">YT</a>
                  </td>
                  <td align="center" width="60">
                    <a href="#" style="display: inline-block; width: 36px; height: 36px; background-color: #ffffff; border-radius: 50%; line-height: 36px; text-align: center; color: #2c5e1a; font-weight: bold; text-decoration: none;">TW</a>
                  </td>
                </tr>
              </table>

              <p style="margin: 15px 0 0 0; color: #ffffff; font-size: 12px;">
                &copy; 2024 Exodus Trails. All rights reserved.
              </p>
            </td>
          </tr>
        </table>

        <!-- Unsubscribe Footer -->
        <table border="0" cellpadding="0" cellspacing="0" width="600">
          <tr>
            <td style="padding: 20px; text-align: center; color: #999999; font-size: 12px;">
              <p style="margin: 0;">
                This email was sent to {email@example.com}. If you prefer not to receive booking confirmations, you can
                <a href="#" style="color: #999999; text-decoration: underline;">unsubscribe</a>, but this may affect our ability to provide service for your booking.
              </p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
