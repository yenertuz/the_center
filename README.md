# the_center

## FileMaker Programming Challenge

Instructions
Your task is to use the requirements and specifications in this document as the basis for creating a fully
functioning FileMaker app. The purpose is for you to have an opportunity to hone your FileMaker
development skills using real-world requirements. There is no “correct” answer or solution; be creative
and enjoy the process!
Some additional instructions:
- Create an ER Diagram of your solution
- Add whatever additional tables and fields you think would be useful to accomplish the tasks
- Document any assumptions you make about requirements
- Make up a critical mass of sample data so that reports can be run for any date range in 2017.

The Center Requirements
The Center is a multifunction community center focused on population specific programming for LGTBQ
folks in the Anytown region. The organization began as a small grass-roots effort and grew organically,
and continues to grow; The Center intends to offer more services in-house in the coming year(s), and
may become hindered by technological issues with this growth.
Their business case appropriate for the 42U programming challenge centers around their Programs and
their CyberCenter, both of which track attendees via sign-in sheets, as well as tallies of referrals made at
these events or at the front desk. Moving the sign-ins and tallies into FileMaker should yield easier
reporting and metrics, plus easier ability to do data entry on mobile devices at outreach events or
community fairs etc. as well as at check-in desks inside The Center itself.
Program Events and Hall Bookings - Currently the attendee sign-ins for the various types of events
hosted by The Center are done on paper at the front desk. Reporting is painful. They'd love to
eventually add on a quick survey as people depart the space. Sign-ins/exits are done at one site in their
building, perhaps soon to be 2 sites. iPads would be perfect for collecting these sign-ins and
surveys. iPads would also expand functionality so that outreach events, done in the field, could also
have sign-in attendee information collection.
Tally Sheets: The desk staff keeps counts of how many people requested X services on a given day: HIV
services, condoms, several population-specific resources. No identifying of requester, just a
count. Tallies of signed-in attendees who request services are also kept. An overall sum of these
referral tallies is used to see the overall referral picture.
CyberCenter - Capacity in the CyberCenter is limited, so they have to sign-in and sign-out all users,
maintaining a waiting list when the computers are full. They capture first name and last initial on paper

2

at front desk, with time in and time out. With this method they can't track quantity of unique users, and
it's hard to calculate total hours of usage. Again, iPads would be ideal for this.
----------------
5-10 staff users of data entry screens. Some will be offered to users directly via tablets, others might be
used by staff on a computer or a tablet/phone.
Reports & Metrics: 2 users, at desk computers; unlikely to use mobile.
High-Level Requirements and Scope
• FileMaker Server
• FileMaker Pro
• FileMaker Go
• FileMaker tables to hold:
o Program
o ProgramEvent
o Attendee Sign-In
o Daily Tally
o CyberCenter Sign-In
o Program Monthly Narrative
• Data entry primarily via FM Pro for:
o Program
o ProgramEvent
o Daily Tally
o Program Monthly Narrative
• Data entry primarily via FM Go for:
o Attendee Sign-In
o CyberCenter Sign-In
• Reports / charting
• PDF output of reports
Program
A Program record represents a particular branch of The Center's work, which may consist of a collection
of different activities, including referrals to relevant third-parties or external resources, meetings,
trainings, outreach trips, events, etc. A program will have a member of The Center's staff as its
manager.
§ ID
§ Program Name
§ Manager
§ Training Types (used to provide a choicelist when a Training-type Event is made for this
Program)
NOTE: We will have Program records for these programs at minimum:

3

• HIV Services
• Qvolution
• Identi-T
• ACT III
• AMP
• Elle
• L Group
• Centerpiece
• Other (for the miscellaneous trainings and such that don't fall under a particular program)
Program Monthly Narrative
Each program has a short bit of narrative text included in the monthly Dashboard Report; the Program
Monthly Narrative record allows the program's manager to create this text ahead of time for use in the
report.
• ID
• Program ID
• Month & Year
• Narrative Text
Program Event - Meeting type
